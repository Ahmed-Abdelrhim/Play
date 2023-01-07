<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlatform;
use App\Models\Product;
use App\services\FatoorahService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct(FatoorahService $paymentGateway)
    {
        $this->gateway = $paymentGateway;
    }


    public function showPaymentForm()
    {
        $currencies = Currency::get();
        $paymentPlatforms = PaymentPlatform::get();
        return view('payment.pay')->with(['currencies' => $currencies, 'plats' => $paymentPlatforms]);
    }

    public function pay($id)
    {
        $author = Auth::guard('author')->user();
        $product = Product::query()->find($id);
        if (!$product)
            return view('error.404', ['msg' => 'Sorry! Product have selected is not more available']);
        $data = [
            'CustomerName' => $author->name,
            'NotificationOption' => 'Lnk', // 'SMS' , 'EML' , or 'ALL'
            'InvoiceValue' => $product->price,
            "MobileCountryCode" => "+20",
            "CustomerMobile" => $author->phone,
            'CustomerEmail' => $author->email,
            'CallBackUrl' => 'http://127.0.0.1:1010/api/success/callback' , // 'http://127.0.0.1:1010/api/success/callback'  env('SUCCESS_URL')
            'ErrorUrl' =>  'http://127.0.0.1:1010/api/error/callback', //'http://127.0.0.1:1010/api/error/callback'   env('ERROR_URL')
            'Language' => app()->getLocale(), //or 'en'
            'DisplayCurrencyIso' => 'EGP',
        ];
        $data =  $this->gateway->sendPayment($data);

        return redirect($data['Data']['InvoiceURL']);
    }

    public function successCallback(Request $request)
    {
        $data = [];
        $data['key'] = $request->get('paymentId');
        $data['keyType'] = 'PaymentId';
        $invoiceData = $this->gateway->getPaymentStatus($data);
        return $invoiceData;
    }

    public function errorCallback(Request $request)
    {
        dd($request);
    }

}
