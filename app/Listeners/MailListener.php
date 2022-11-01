<?php

namespace App\Listeners;

use App\Events\MailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\MailEvent  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
        // dd($event);
        info('BlogPost Has Been Created Successfully ' . $event->post->id);
    }
}
