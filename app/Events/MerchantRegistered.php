<?php

namespace App\Events;

use App\Models\Merchant;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MerchantRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Merchant
     */
    public $merchant;

    /**
     * Create a new event instance.
     *
     * @param Merchant $merchant
     */
    public function __construct(Merchant $merchant)
    {
        //
        $this->merchant = $merchant;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
