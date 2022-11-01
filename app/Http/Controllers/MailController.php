<?php

namespace App\Http\Controllers;

use App\Mail\GmailMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function viewSendEmailForm()
    {
        return view('emails.send-email');
    }

    public function sendEmail(Request $request):string
    {
        $details = [
            'title' => 'This Email Is From Laravel Application',
            'body' => 'Welcome From Ahmed Abdelrhim',
        ];
        $email = $request->get('email');

        Mail::send(new GmailMail($email));
        $request->session()->flash('success' , 'Email Sent Successfully');
        return redirect()->back();
        //return 'Email Sent Successfully';

    }
}
// anas.rabea1000@gmail.com aabdelrhim974  form('ahmedabdelrhim92@gmail.com')->
