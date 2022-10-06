<?php

namespace App\Http\Controllers;

use App\Mail\GmailMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendEmail():string
    {
        $details = [
            'title' => 'This Email Is From Laravel Application',
            'body' => 'Welcome From Ahmed Abdelrhim',
        ];

        Mail::to('aabdelrhim974@gmail.com')->send(new GmailMail($details));
        return 'Email Sent Successfully';
    }
}
// anas.rabea1000@gmail.com aabdelrhim974  form('ahmedabdelrhim92@gmail.com')->
