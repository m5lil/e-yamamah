<?php

namespace App\Listeners;

use App\Events\MerchantRegistered;
use App\Mail\WelcomeToMerchant;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Spatie\Newsletter\Newsletter;

class SendWelcome
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
     * @param  MerchantRegistered  $event
     * @return void
     */
    public function handle(MerchantRegistered $event)
    {
        Mail::to($event->merchant)->send(new WelcomeToMerchant($event->merchant));

        if ( ! Newsletter::isSubscribed($event->merchant->email) )
        {
            Newsletter::subscribe($event->merchant->email);
        }
    }
}
