<?php

namespace App\Event;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Broadcasting\PrivateChannel;
// use Illuminate\Broadcasting\PresenceChannel;
// use Illuminate\Foundation\Events\Dispatchable;
// use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PersonEvent
{
    // use Dispatchable, InteractsWithSockets, SerializesModels;
    use SerializesModels;
    
    public $person;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct(Person $person)
    {
        $this->person = $person;
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