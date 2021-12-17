<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;


class PaymentController extends Controller
{
    public function paymentPost(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount"=>$request->sub*100,
            //'sub' get from id="sub" in myCart.blade.php
            //sub value 1=100, to get actual value, must *100
            "currency"=>"MYR",
            "source"=>$request->stripeToken,
            "description"=>"This payment is testing purpose of southern online",
        ]);
        return back();
    }
}
