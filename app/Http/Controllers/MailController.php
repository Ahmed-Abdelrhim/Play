<?php

namespace App\Http\Controllers;

use App\Mail\GmailMail;
use App\Models\VerificationCode;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function viewSendEmailForm(): View
    {
        return view('emails.send-email');
    }

    public function sendEmail(Request $request):string
    {
//        $details = [
//            'title' => 'This Email Is From Laravel Application',
//            'body' => 'Welcome From Ahmed Abdelrhim',
//        ];

        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'msg' => 'required|string|min:10',
        ]);
        if($validate->fails())
            return redirect('email-send')->withErrors($validate)->withInput();
        $email = $request->get('email');

        $code = VerificationCode::query()->inRandomOrder()->first()->code;
        $msg = $request->get('msg');

        Mail::to($email)->send(new GmailMail($msg , $code));
        $request->session()->flash('success' , 'Email Sent Successfully');
        return redirect()->back();
        //return 'Email Sent Successfully';

    }

    public function checkVerificationCodeForm(): View
    {
        return view('check-verification-code');
    }

    public function checkVerificationCode(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'code' => 'required|numeric|min:4'
        ]);

        if($validator->fails())
            return redirect('check-verified-code')->withErrors($validator)->withInput();

        $code = $request->get('code');
        $code_exists = VerificationCode::query()
            ->where('code' , $code)->first();

        if(!$code_exists) {
            $request->session()->flash('not-found' , 'Code not exists');
            return redirect()->back();
        }


        $code_exists->delete();
        $request->session()->flash('success' , 'code checked success');
        return redirect()->back();
    }

}
// anas.rabea1000@gmail.com aabdelrhim974  form('ahmedabdelrhim92@gmail.com')->
