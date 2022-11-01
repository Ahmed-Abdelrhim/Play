<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GmailMail extends Mailable
{
    use Queueable, SerializesModels;
    //public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $email)
    {
        // $this->details =$details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): GmailMail
    {


        return $this->from('aabdelrhim974@gmail.com')->to($this->email)
            ->subject('Your Order Was Shipped')
            ->view('emails.shipped-order');
    }
}
// uxnsrtnhpyyhuzpn 587
