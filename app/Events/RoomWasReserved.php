<?php

namespace MyCompany\Events;

use MyCompany\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use MyCompany\User;
use MyCompany\Accommodation\Reservation;

class RoomWasReserved extends Event
{

    use SerializesModels;

    private $user;
    private $reservation;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Reservation $reservation)
    {
        $this->user = $user;
        $this->reservation = $reservation;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

}
