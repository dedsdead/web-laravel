<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\Propriedade;

use Illuminate\Support\Facades\Auth;

class PropriedadeEvent {
    
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $propriedade;

    public function __construct(Propriedade $propriedade){
        $this->propriedade = $propriedade;
        $this->user = Auth::user();

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
