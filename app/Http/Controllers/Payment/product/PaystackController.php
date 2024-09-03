<?php

namespace App\Http\Controllers\Payment\product;

use App\Http\Controllers\Payment\product\PaymentController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\OfflineGateway;
use App\OrderItem;
use App\Product;
use App\ProductOrder;
use App\ShippingCharge;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDF;

class PaystackController extends PaymentController
{
    public function store(Request $request)
    {
        if (!Session::has('cart')) {
            return view('errors.404');
        }

        $success_url = action('Payment\product\PaymentController@payreturn');

        if($this->orderValidation($request)) {
            return $this->orderValidation($request);
        }


        $txnId = 'txn_' . \Str::random(8) . time();
        $chargeId = 'ch_' . \Str::random(9) . time();
        $order = $this->saveOrder($request, $txnId, $chargeId, "Completed");
        $order_id = $order->id;

        $this->saveOrderedItems($order_id);


        $this->sendMails($order);

        return redirect($success_url);
    }
}
