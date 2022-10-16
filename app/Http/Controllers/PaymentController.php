<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlatform;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        $currencies = Currency::get();
        $paymentPlatforms = PaymentPlatform::get();
        return view('payment.pay')->with(['currencies' => $currencies, 'plats' => $paymentPlatforms]);
    }
}
