<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\KreativMailer;
use App\User;
use Auth;
use Session;
use App\Language;
use Config;
use App\BasicSetting as BS;
use App\BasicExtended as BE;
use App\BasicExtra;

class RegisterController extends Controller
{

    public function registerPage()
    {

        return view('frontend.register');

    }

    public function register(Request $request)
    {

        $rules = [
            'email'   => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ];

        $request->validate($rules);

        $user = new User;
        $input = $request->all();
        $input['status'] = 1;
        $input['password'] = bcrypt($request['password']);
        $token = md5(time().$request->name.$request->email);
        $input['verification_link'] = $token;
        $user->fill($input)->save();


        $mailer = new KreativMailer();
        $data = [
            'toMail' => $user->email,
            'toName' => $user->username,
            'customer_username' => $user->username,
            'verification_link' => "<a href='" . url('register/verify/' . $token) . "'>" . url('register/verify/' . $token) . "</a>",
            'website_title' => 'Shanti Jewelry',
            'templateType' => 'email_verification',
            'type' => 'emailVerification'
        ];
        $mailer->mailFromAdmin($data);

        return back()->with('sendmail','We need to verify your email address. We have sent an email to  '.$request->email. ' to verify your email address. Please click link in that email to continue.');

    }


    public function token($token)
    {
        $user = User::where('verification_link',$token)->first();
        if(isset($user))
        {
            $user->email_verified = 'Yes';
            $user->update();
            Auth::guard('web')->login($user);
            Session::flash('success', 'Email Verified Successfully');
            return redirect()->route('user-dashboard');
        }
    }

}
