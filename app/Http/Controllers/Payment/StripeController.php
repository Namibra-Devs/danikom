<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Payment\PaymentController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\Exception;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Language;
use App\Package;
use App\PaymentGateway;
use Config;

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
        // Validation Starts
        if (session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
        } else {
            $currentLang = Language::where('is_default', 1)->first();
        }

        $be = $currentLang->basic_extended;
        $bex = $currentLang->basic_extra;
        $package_inputs = $currentLang->package_inputs;
        $request['method'] = 'Stripe';
        $validation = $this->orderValidation($request, $package_inputs);
        if ($validation) {
            return $validation;
        }

        $package = Package::find($request->package_id);
        $title = $package->title;


        $stripe = Stripe::make(Config::get('services.stripe.secret'));
        try {

            $token = $request->stripeToken;

            if (!isset($token)) {
                return back()->with('error', 'Token Problem With Your Token.');
            }

            $charge = $stripe->charges()->create([
                'source' => $token,
                'currency' =>  "USD",
                'amount' => round(($package->price / $bex->base_currency_rate), 2),
                'description' => $title,
                'receipt_email' => $request->email,
                'metadata' => [
                    'customer_name' => $request->name != null ? $request->name : '',
                ]
            ]);


            // donar data store..............//

            if ($charge['status'] == 'succeeded') {
                // save order
                $po = $this->saveOrder($request, $package_inputs, 1);

                // send mails
                $this->sendMails($po, $be, $bex);

                session()->flash('success', 'Payment completed!');
                return redirect()->route('front.packageorder.confirmation', [$package->id, $po->id]);
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
            return back()->with('error', $e->getMessage());
        } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Please Enter Valid Credit Card Informations.');
    }
}
