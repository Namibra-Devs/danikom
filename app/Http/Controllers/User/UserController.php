<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\BasicExtra;
use App\Language;
use App\ProductOrder;
use App\Subscription;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['user'] = Auth::user();
        $data['orders'] = ProductOrder::where('user_id', Auth::user()->id)->orderby('id', 'desc')->limit(10)->get();

        return view('user.dashboard', $data);
    }


    public function packages() {
        if (session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
        } else {
            $currentLang = Language::where('is_default', 1)->first();
        }

        $data['packages'] = $currentLang->packages;
        $data['activeSub'] = Subscription::where('user_id', Auth::user()->id)->where('status', 1);

        return view('user.packages', $data);
    }



    public function profile()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function profileupdate(Request $request)
    {

        $request->validate([
            'username' => [
                'required',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'fname' => 'required',
            'lname' => 'required',
            'city' => 'required',
            'number' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',

        ]);

        //--- Validation Section Ends
        $input = $request->all();
        $data = Auth::user();
        if ($file = $request->file('photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('assets/frontend/images/user/', $name);
            if ($data->photo != null) {
                if (file_exists(base_path('../assets/frontend/images/user/' . $data->photo))) {
                    unlink(base_path('../assets/frontend/images/user/' . $data->photo));
                }
            }
            $input['photo'] = $name;
        }
        $data->update($input);


        Session::flash('success', 'Profile Update Successfully!');
        return back();
    }

    public function resetform()
    {
        return view('user.reset');

    }

    public function reset(Request $request)
    {

        $messages = [
            'cpass.required' => 'Current password is required',
            'npass.required' => 'New password is required',
            'cfpass.required' => 'Confirm password is required',
        ];

        $request->validate([
            'cpass' => 'required',
            'npass' => 'required',
            'cfpass' => 'required',
        ], $messages);


        $user = Auth::user();
        if ($request->cpass) {
            if (Hash::check($request->cpass, $user->password)) {
                if ($request->npass == $request->cfpass) {
                    $input['password'] = Hash::make($request->npass);
                } else {
                    return back()->with('err', __('Confirm password does not match.'));
                }
            } else {
                return back()->with('err', __('Current password Does not match.'));
            }
        }

        $user->update($input);

        Session::flash('success', 'Successfully change your password');
        return back();
    }

    public function billingdetails()
    {

        $user = Auth::user();

        return view('user.billing_details', compact('user'));

    }

    public function billingupdate(Request $request)
    {
        $request->validate([
            "billing_fname" => 'required',
            "billing_lname" => 'required',
            "billing_email" => 'required',
            "billing_number" => 'required',
            "billing_city" => 'required',
            "billing_state" => 'required',
            "billing_address" => 'required',
            "billing_country" => 'required',
        ]);

        $input = $request->all();

        $user = Auth::user();
        $user->update($input);

        Session::flash('success', 'Billing Details Update Successfully.');
        return back();
    }
}
