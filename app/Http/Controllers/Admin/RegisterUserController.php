<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisterUserController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term;

        $users = User::when($term, function($query, $term) {
            $query->where('username', 'like', '%' . $term . '%')->orWhere('email', 'like', '%' . $term . '%');
        })->paginate(10);
        return view('admin.register_user.index',compact('users'));
    }

    public function view($id)
    {
        $user = User::findOrFail($id);
        $orders = $user->orders()->paginate(10);
        return view('admin.register_user.details',compact('user', 'orders'));

    }


    public function userban(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update([
            'status' => $request->status,
        ]);

        Session::flash('success', $user->username.' status update successfully!');
        return back();
    }


    public function emailStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update([
            'email_verified' => $request->email_verified,
        ]);

        Session::flash('success', 'Email status updated for ' . $user->username);
        return back();
    }

    public function delete(Request $request)
    {
        $user = User::findOrFail($request->user_id);


        if ($user->event_details()->count() > 0) {
            $bookings = $user->event_details()->get();
            foreach ($bookings as $key => $booking) {
                @unlink('assets/frontend/receipt/' . $booking->receipt);
                @unlink('assets/frontend/invoices/' . $booking->invoice);
                $booking->delete();
            }
        }

        if ($user->order_items()->count() > 0) {
            $user->order_items()->delete();
        }

        if ($user->orders()->count() > 0) {
            $orders = $user->orders()->get();
            foreach ($orders as $key => $order) {
                @unlink('assets/frontend/receipt/' . $order->receipt);
                @unlink('assets/frontend/invoices/product/' . $order->invoice_number);
                $order->delete();
            }
        }

        @unlink('assets/frontend/images/user/' . $user->photo);
        $user->delete();

        Session::flash('success', 'User deleted successfully!');
        return back();
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $user = User::findOrFail($id);

            if ($user->event_details()->count() > 0) {
                $bookings = $user->event_details()->get();
                foreach ($bookings as $key => $booking) {
                    @unlink('assets/frontend/receipt/' . $booking->receipt);
                    @unlink('assets/frontend/invoices/' . $booking->invoice);
                    $booking->delete();
                }
            }

            if ($user->order_items()->count() > 0) {
                $user->order_items()->delete();
            }

            if ($user->orders()->count() > 0) {
                $orders = $user->orders()->get();
                foreach ($orders as $key => $order) {
                    @unlink('assets/frontend/receipt/' . $order->receipt);
                    @unlink('assets/frontend/invoices/product/' . $order->invoice_number);
                    $order->delete();
                }
            }

            @unlink('assets/frontend/images/user/' . $user->photo);
            $user->delete();
        }

        Session::flash('success', 'Users deleted successfully!');
        return "success";
    }


    public function changePass($id) {
        $data['user'] = User::findOrFail($id);
        return view('admin.register_user.password', $data);
    }


    public function updatePassword(Request $request)
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


        $user = User::findOrFail($request->user_id);
        if ($request->cpass) {
            if (Hash::check($request->cpass, $user->password)) {
                if ($request->npass == $request->cfpass) {
                    $input['password'] = Hash::make($request->npass);
                } else {
                    return back()->with('error', __('Confirm password does not match.'));
                }
            } else {
                return back()->with('error', __('Current password Does not match.'));
            }
        }

        $user->update($input);

        Session::flash('success', 'Password update for ' . $user->username);
        return back();
    }
}
