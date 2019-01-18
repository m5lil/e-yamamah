<?php

namespace App\Mail;

use App\Models\Merchant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeToMerchant extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Merchant
     */
    protected $merchant;

    /**
     * Create a new message instance.
     *
     * @param Merchant $merchant
     */
    public function __construct(Merchant $merchant)
    {
        //
        $this->merchant = $merchant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.merchants.welcome')->with([
            'name' => $this->merchant->name,
            'username' => $this->merchant->username,
            'password' => session()->get('password'),
        ]);
    }
}
