<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Models\ShippingCharge;
use Validator;
use Session;

class ShopSettingController extends Controller
{
   public function index(Request $request)
   {

        $data['shippings'] = ShippingCharge::orderBy('id', 'DESC')->paginate(10);
       return view('admin.product.shop_setting.index',$data);
   }


   public function store(Request $request)
   {
    $rules = [
        'title' => 'required',
        'text' => 'required|max:255',
        'charge' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        $errmsgs = $validator->getMessageBag()->add('error', 'true');
        return response()->json($validator->errors());
    }

    $input = $request->all();

    $data = new ShippingCharge;
    $data->create($input);

    Session::flash('success', 'Shipping Charge added successfully!');
    return "success";
   }

   public function edit($id)
   {
       $shipping = ShippingCharge::findOrFail($id);
       return view('admin.product.shop_setting.edit',compact('shipping'));
   }

   public function update(Request $request)
   {
    $rules = [
        'title' => 'required',
        'text' => 'required|max:255',
        'charge' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        $errmsgs = $validator->getMessageBag()->add('error', 'true');
        return response()->json($validator->errors());
    }

    $data = ShippingCharge::findOrFail($request->shipping_id);
    $data->update($request->all());

    Session::flash('success', 'Shipping charge update successfully!');
    return "success";

   }


   public function delete(Request $request)
   {
        $data = ShippingCharge::findOrFail($request->shipping_id);
        $data->delete();
        Session::flash('success', 'Shipping charge delete successfully!');
        return back();
   }


}