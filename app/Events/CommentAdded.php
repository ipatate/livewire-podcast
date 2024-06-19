<?php

namespace App\Events;

//use Illuminate\Broadcasting\Channel;
use App\Models\Podcast;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;

//use Illuminate\Broadcasting\PresenceChannel;
//use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommentAdded implements ShouldBroadcast {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Podcast $podcast;

    public function __construct( Podcast $podcast ) {
        $this->podcast = $podcast;
    }

    /**
     * @inheritDoc
     */
    public function broadcastOn(): array {
        return [ new Channel( 'comment.add.' . $this->podcast->id ) ];
    }
}
