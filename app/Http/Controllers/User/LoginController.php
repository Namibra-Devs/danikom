<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Models\User;
use Socialite;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);

    }

    public function showLoginForm()
    {

        $url = url()->previous();
        $url = (explode('/', $url));
        if (in_array('checkout', $url)) {
            session(['link' => url()->previous()]);
        } elseif (strpos(url()->full(), 'redirected=event')) {
            session(['link' => url()->previous()]);
        }

        return view('frontend.pages.login');
    }

    public function login(Request $request)
    {

        if (Session::has('link')) {
            $redirectUrl = Session::get('link');
            Session::forget('link');
        } else {
            $redirectUrl = route('user-dashboard');
        }

        //--- Validation Section

        // $bs = $currentLang->basic_setting;
        // $be = $currentLang->basic_extended;



        $rules = [
            'email'   => 'required|email',
            'password' => 'required'
        ];

        // if ($bs->is_recaptcha == 1) {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // }
        // $messages = [
        //     'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        //     'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        // ];

        $request->validate($rules);
        //--- Validation Section Ends

        // Attempt to log the user in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location

            // Check If Email is verified or not
            if (Auth::guard('web')->user()->email_verified == 'no' || Auth::guard('web')->user()->email_verified == 'No') {
                Auth::guard('web')->logout();

                return back()->with('error', __('Your Email is not Verified!'));
            }
            if (Auth::guard('web')->user()->status == '0') {
                Auth::guard('web')->logout();

                return back()->with('error', __('Your account has been banned'));
            }
            return redirect($redirectUrl);
        }
        // if unsuccessful, then redirect back to the login with the form data
        return back()->with('error', __("Credentials Doesn\'t Match !"));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        return $this->authUserViaProvider('facebook');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        return $this->authUserViaProvider('google');
    }

    public function authUserViaProvider($provider) {
        if (Session::has('link')) {
            $redirectUrl = Session::get('link');
            Session::forget('link');
        } else {
            $redirectUrl = route('user-dashboard');
        }

        $user = Socialite::driver($provider)->user();
        if ($provider == 'facebook') {
            $user = json_decode(json_encode($user), true);
        } elseif ($provider == 'google') {
            $user = json_decode(json_encode($user), true)['user'];
        }


        if ($provider == 'facebook') {
            $fname = $user['name'];
            $photo = $user['avatar'];
        } elseif ($provider == 'google') {
            $fname = $user['given_name'];
            $lname = $user['family_name'];
            $photo = $user['picture'];
        }
        $email = $user['email'];
        $provider_id = $user['id'];


        // retrieve user via the email
        $user = User::where('email', $email)->first();

        // if doesn't exist, store the new user's info (email, name, avatar, provider_name, provider_id)
        if (empty($user)) {
            $user = new User;
            $user->email = $email;
            $user->fname = $fname;
            if ($provider == 'google') {
                $user->lname = $lname;
            }
            $user->photo = $photo;
            $user->username = $provider_id;
            $user->provider_id = $provider_id;
            $user->provider = $provider;
            $user->status = 1;
            $user->email_verified = 'Yes';
            $user->save();
        }


        // authenticate the user
        Auth::login($user);

        // if user is banned
        if ($user->status == 0) {
            Auth::guard('web')->logout();

            return redirect(route('user.login'))->with('error', __('Your account has been banned'));
        }

        // if logged in successfully
        return redirect($redirectUrl);

    }
}
