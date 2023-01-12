<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlatform;
use App\Models\Product;
use App\services\FatoorahService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Illuminate\Support\Str;
class PaymentController extends Controller
{
    protected $gateway;

    public function __construct(FatoorahService $paymentGateway)
    {
        $this->gateway = $paymentGateway;
    }


    public function showPaymentForm(): Factory|View|Application
    {
        $currencies = Currency::query()->get();
        $paymentPlatforms = PaymentPlatform::query()->get();
        return view('payment.pay')->with(['currencies' => $currencies, 'plats' => $paymentPlatforms]);
    }

    public function pay($id): View|Factory|Redirector|RedirectResponse|Application
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
            'CallBackUrl' => 'http://127.0.0.1:1010/api/success/callback', // 'http://127.0.0.1:1010/api/success/callback'  env('SUCCESS_URL')
            'ErrorUrl' => 'http://127.0.0.1:1010/api/error/callback', //'http://127.0.0.1:1010/api/error/callback'   env('ERROR_URL')
            'Language' => app()->getLocale(), //or 'en'
            'DisplayCurrencyIso' => 'EGP',
        ];
        $data = $this->gateway->sendPayment($data);
        $invoiceId = $data['Data']['InvoiceId'];
        $invoiceURL = $data['Data']['InvoiceURL'];
        try {
            DB::beginTransaction();
            Transaction::query()->create([
                'invoiceId' => $invoiceId,
                'customer_id' => $author->id,
                'product_id' => $product->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Something Went Wrong');
            return redirect()->back();
        }
        DB::commit();
        return redirect($invoiceURL);
    }

    public function successCallback(Request $request): RedirectResponse
    {
        $data = [];
        $data['key'] = $request->get('paymentId');
        $data['keyType'] = 'PaymentId';
        $invoiceData = $this->gateway->getPaymentStatus($data);
        return $this->successAction($invoiceData);
    }

    public function errorCallback(Request $request): Request
    {
        return $request;
        // dd($request);
    }

    public function successAction($invoiceData): RedirectResponse
    {
        try {
            $invoice_id = $invoiceData['Data']['InvoiceId'];
            $transaction = Transaction::query()->where('invoiceId', $invoice_id)->get()->last();
            DB::beginTransaction();
            Payment::query()->create([
                'invoiceId' => $invoiceData['Data']['InvoiceId'],
                'customer_id' => $transaction->customer_id,
                'product_id' => $transaction->product_id,
                'created_date' => $invoiceData['Data']['CreatedDate'],
                'invoice_value' => $invoiceData['Data']['InvoiceValue'],
                'currency' => $invoiceData['Data']['InvoiceTransactions'][0]['Currency'],
                'card_number' => $invoiceData['Data']['InvoiceTransactions'][0]['CardNumber'],
                'country' => $invoiceData['Data']['InvoiceTransactions'][0]['Country'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Something Went Wrong');
            return redirect()->back();
        }
        DB::commit();
        session()->flash('success', 'Success Transaction , Your Order Was Bought Successfully');
        return redirect()->route('product.show',[Str::random(15),$transaction->product_id,Str::random(15)]);
    }

    public function play(): RedirectResponse
    {
        session()->flash('success', 'Success Transaction , Your Order Was Bought Successfully');
        $msg = 'Success Transaction , Your Order Was Bought Successfully';
        return redirect()->route('product.show',[Str::random(15),4,Str::random(15)])->with(['success' => $msg]);

    }

    public function checkout($ids)
    {
        return $ids;
//        return unserialize($ids);
        // $product_id = serialize($ids);
        // return strlen($ids);
    }


}
// T-Shirt Python     تيشيرت بايثون  Solid colors: 100% Cotton; Heather Grey: 90% Cotton, 10% Polyester; All Other Heathers: 50% Cotton, 50% Polyester        SuaIz2fH1672766239.png
// Developers T-Shirt تيشيرت للمبرمجين               8    JsR1zuD1672766440.jpg
// Node.js T-Shirt تيشيرت نود جي اس  BADhUinz1672766526.jpg
// Web Development T-Shirt  تيشيرت برمجة الويب  Aba4c4qK1672766709.jpg
