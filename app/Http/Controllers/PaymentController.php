<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlatform;
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

    public function pay()
    {
        // $author = Auth::guard('author')->user()->name;
        // return 'dddd';
        $data = [
            'CustomerName'       => 'Ahmed Abdelrhim',
            'NotificationOption' => 'Lnk', // 'SMS' , 'EML' , or 'ALL'
            'InvoiceValue'       => 500,
            "MobileCountryCode" => "20",
            "CustomerMobile" => "01152067271",
            'CustomerEmail'      => 'aabdelrhim974@gmail.com',
            'CallBackUrl'        => 'http://127.0.0.1:1020/api/success/callback', // http://127.0.0.1:1020/api/pay/goo
            'ErrorUrl'           => 'http://127.0.0.1:1020/api/error/callback', // or  https://google.com https://youtube.com
            'Language'           => 'ar', //or 'en'
            'DisplayCurrencyIso' => 'EGP',


//            "CustomerName" => "Ahmed",
//            "NotificationOption" => "Lnk",
//            "MobileCountryCode" => "20",
//            "CustomerMobile" => "01152067271",
//            "CustomerEmail" => "aabdelrhim974@gmail.com",
//            "InvoiceValue" => 100,
//            "DisplayCurrencyIso" => "EGP",
//            "CallBackUrl" => 'https://google.com',
//            "ErrorUrl" => 'https://youtube.com',
//            "Language" => "en",

        ];
        return $this->gateway->sendPayment($data);
    }
    public function successCallback(Request $request)
    {
        dd($request);
    }

    public function errorCallback(Request $request)
    {
        dd($request);
    }

}

//Fill optional data
//'MobileCountryCode'  => '+965',
//'CustomerMobile'     => '1234567890',

//'CustomerReference'  => 'orderId',
//'CustomerCivilId'    => 'CivilId',
//'UserDefinedField'   => 'This could be string, number, or array',
//'ExpiryDate'         => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
//'SourceInfo'         => 'Pure PHP', //For example: (Symfony, CodeIgniter, Zend Framework, Yii, CakePHP, etc)
//'CustomerAddress'    => $customerAddress,
//'InvoiceItems'       => $invoiceItems,
