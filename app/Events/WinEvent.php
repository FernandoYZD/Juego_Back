<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WinEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $win;
    public function __construct($win)
    {
        $this->win = $win;
    }
    public function broadcastOn(): array
    {
        return [
            new Channel('win-game'),
        ];
    }
    public function broadcastAs()
    {
        return 'win-game-event';
    }
}
