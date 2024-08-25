<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use App\Models\Product;
use App\ProductOrder;
use Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $orders = ProductOrder::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();

        return view('user.order',compact('orders'));

    }

    public function orderdetails($id)
    {

        $data = ProductOrder::findOrFail($id);

        return view('user.order_details',compact('data'));

    }

    public function digitalDownload(Request $request) {
        $product = Product::find($request->product_id);
        $count = OrderItem::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->count();

        // if the auth user didn't purchase the item
        if ($count == 0) {
            return back();
        }

        $pathToFile = 'core/storage/digital_products/' . $product->download_file;
        if (file_exists($pathToFile)) {
            return response()->download($pathToFile);
        } else {
            $request->session()->flash('error', "No donwloadable file exists!");
            return back();
        }
    }
}
