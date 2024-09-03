<?php

namespace App\Http\Controllers\Payment\product;

use App\BasicExtra;
use App\Http\Controllers\Payment\product\PaymentController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Mail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Validator;
use App\PaymentGateway;
use App\Language;
use App\ProductOrder;
use App\OrderItem;
use App\ShippingCharge;
use App\Product;
use Auth;
use DB;
use PDF;
use Carbon\Carbon;
use Session;

class StripeController extends PaymentController
{
    public function __construct()
    {
        //Set Spripe Keys
        $stripe = PaymentGateway::findOrFail(14);
        $stripeConf = json_decode($stripe->information, true);
        Config::set('services.stripe.key', $stripeConf["key"]);
        Config::set('services.stripe.secret', $stripeConf["secret"]);
    }


    public function store(Request $request)
    {
        if (!Session::has('cart')) {
            return view('errors.404');
        }

        $total = $this->orderTotal($request->shipping_charge);

        $bex = BasicExtra::first();

        $usdTotal = round(($total / $bex->base_currency_rate), 2);

        $title = 'Product Checkout';
        $success_url = action('Payment\product\PaymentController@payreturn');

        // return $request;
        if ($this->orderValidation($request)) {
            return $this->orderValidation($request);
        }

        $stripe = Stripe::make(Config::get('services.stripe.secret'));
        try {

            $token = $request->stripeToken;

            if (!isset($token)) {
                return back()->with('error', 'Token Problem With Your Token.');
            }

            $charge = $stripe->charges()->create([
                'source' => $token,
                'currency' =>  $request->currency_code,
                'amount' => $usdTotal,
                'description' => $title,
                'receipt_email' => $request->billing_email,
                'metadata' => [
                    'customer_name' => $request->billing_fname != null ? $request->billing_fname : '',
                ]
            ]);



            if ($charge['status'] == 'succeeded') {

                $txnId = $charge['balance_transaction'];
                $chargeId = $charge['id'];
                $order = $this->saveOrder($request, $txnId, $chargeId, "Completed");
                $order_id = $order->id;

                $this->saveOrderedItems($order_id);

                $this->sendMails($order);

                return redirect($success_url);
            }
        } catch (Exception $e) {
            return back()->with('unsuccess', $e->getMessage());
        } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
            return back()->with('unsuccess', $e->getMessage());
        } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            return back()->with('unsuccess', $e->getMessage());
        }

        // return back()->with('unsuccess', 'Please Enter Valid Credit Card Informations.');
    }
}
