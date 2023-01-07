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
        $invoiceId =  $data['Data']['InvoiceId'];
        $invoiceURL =  $data['Data']['InvoiceURL'];
        // InvoiceId customer_id product_id
        return redirect($invoiceURL);
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
// T-Shirt Python     تيشيرت بايثون  Solid colors: 100% Cotton; Heather Grey: 90% Cotton, 10% Polyester; All Other Heathers: 50% Cotton, 50% Polyester        SuaIz2fH1672766239.png
// Developers T-Shirt تيشيرت للمبرمجين               8    JsR1zuD1672766440.jpg
// Node.js T-Shirt تيشيرت نود جي اس  BADhUinz1672766526.jpg
// Web Development T-Shirt  تيشيرت برمجة الويب  Aba4c4qK1672766709.jpg
