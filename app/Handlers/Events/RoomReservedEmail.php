<?php

namespace MyCompany\Handlers\Events;

use MyCompany\Events\RoomWasReserved;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RoomReservedEmail
{

    /**
     * Create the event handler.
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
     * @param  RoomWasReserved  $event
     * @return void
     */
    public function handle(RoomWasReserved $event)
    {
        //TODO: send email to $event->user
        //TODO: with details about $event->reservation;
    }

}
