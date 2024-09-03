<?php

namespace App\Http\Controllers\Payment\product;

use App\BasicExtended;
use App\BasicExtra;
use App\BasicSetting;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Http\Controllers\Controller;
use App\Http\Helpers\KreativMailer;
use App\Language;
use App\OfflineGateway;
use App\OrderItem;
use App\Product;
use App\ProductOrder;
use App\ShippingCharge;
use Auth;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function paycancle()
    {
        return redirect()->back()->with('unsuccess', 'Payment Cancelled.');
    }

    public function payreturn()
    {


        return view('frontend.product.success');
    }

    public function orderValidation($request, $gtype = 'online') {
        $rules = [
            'billing_fname' => 'required',
            'billing_lname' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_country' => 'required',
            'billing_number' => 'required',
            'billing_email' => 'required',
            'shpping_fname' => 'required',
            'shpping_lname' => 'required',
            'shpping_address' => 'required',
            'shpping_city' => 'required',
            'shpping_country' => 'required',
            'shpping_number' => 'required',
            'shpping_email' => 'required',
        ];

        $request->validate($rules);
    }

    public function orderTotal($shipping) {
        if ($shipping != 0) {
            $shipping = ShippingCharge::findOrFail($shipping);
            $shippig_charge = $shipping->charge;
        } else {
            $shippig_charge = 0;
        }

        $total = round((cartTotal() - coupon()) + $shippig_charge, 2);

        return round($total, 2);
    }


    public function saveOrder($request, $txnId, $chargeId, $paymentStatus = 'Pending', $gtype = 'online') {

        $total = $this->orderTotal($request["shipping_charge"]);
        if ($request['shipping_charge'] != 0) {
            $shipping = ShippingCharge::findOrFail($request['shipping_charge']);
            $shippig_charge = $shipping->charge;
            $shipping_method = $shipping->title;
        } else {
            $shippig_charge = 0;
            $shipping_method = NULL;
        }

        $order = new ProductOrder;


        $order->billing_fname = $request['billing_fname'];
        $order->billing_lname = $request['billing_lname'];
        $order->billing_email = $request['billing_email'];
        $order->billing_address = $request['billing_address'];
        $order->billing_city = $request['billing_city'];
        $order->billing_country = $request['billing_country'];
        $order->billing_number = $request['billing_number'];
        $order->shpping_fname = $request['shpping_fname'];
        $order->shpping_lname = $request['shpping_lname'];
        $order->shpping_email = $request['shpping_email'];
        $order->shpping_address = $request['shpping_address'];
        $order->shpping_city = $request['shpping_city'];
        $order->shpping_country = $request['shpping_country'];
        $order->shpping_number = $request['shpping_number'];
        $order->gateway_type = $gtype;


        $order->cart_total = cartTotal();
        // $order->tax = tax();
        $order->discount = coupon();
        $order->total = $total;
        $order->shipping_method = $shipping_method;
        $order->shipping_charge = round($shippig_charge, 2);
        $order->method = 'MOMO/Visa';
        $order->currency_code = 'GHS';
        $order['order_number'] = \Str::random(4) . time();
        $order['payment_status'] = $paymentStatus;
        $order['txnid'] = $txnId;
        $order['charge_id'] = $chargeId;
        $order['user_id'] = Auth::check() ? Auth::user()->id : NULL;



        $order->save();

        return $order;
    }


    public function saveOrderedItems($orderId) {
        $cart = Session::get('cart');
        $products = [];
        $qty = [];
        foreach ($cart as $id => $item) {
            $qty[] = $item['qty'];
            $products[] = Product::findOrFail($id);
        }



        foreach ($products as $key => $product) {
            if (!empty($product->category)) {
                $category = $product->category->name;
            } else {
                $category = '';
            }
            OrderItem::insert([
                'product_order_id' => $orderId,
                'product_id' => $product->id,
                'user_id' => Auth::check() ? Auth::user()->id : NULL,
                'title' => $product->title,
                'sku' => $product->sku,
                'qty' => $qty[$key],
                'category' => $category,
                'price' => $product->current_price,
                'previous_price' => $product->previous_price,
                'image' => $product->feature_image,
                'summary' => $product->summary,
                'description' => $product->description,
                'created_at' => Carbon::now(),
            ]);
        }

        foreach ($cart as $id => $item) {
            $product = Product::findOrFail($id);
            $stock = $product->stock - $item['qty'];
            Product::where('id', $id)->update([
                'stock' => $stock
            ]);
        }
    }

    public function sendMails($order) {

        $fileName = \Str::random(4) . time() . '.pdf';
        $path = 'assets/frontend/invoices/product/' . $fileName;
        $data['order']  = $order;
        $pdf = PDF::loadView('pdf.product', $data)->save($path);


        ProductOrder::where('id', $order->id)->update([
            'invoice_number' => $fileName
        ]);

        // Send Mail to Buyer
        $mailer = new KreativMailer;
        $data = [
            'toMail' => $order->billing_email,
            'toName' => $order->billing_fname,
            'attachment' => $fileName,
            'customer_name' => $order->billing_fname,
            'order_number' => $order->order_number,
            'order_link' => !empty($order->user_id) ? "<strong>Order Details:</strong> <a href='" . route('user-orders-details',$order->id) . "'>" . route('user-orders-details',$order->id) . "</a>" : "",
            'website_title' => 'Danikom Trading',
            'templateType' => 'product_order',
            'type' => 'productOrder'
        ];

        $mailer->mailFromAdmin($data);

        Session::forget('cart');
        Session::forget('coupon');
    }
}
