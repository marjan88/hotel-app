<?php

namespace MyCompany\Handlers\Commands;

use MyCompany\Commands\ReserveRoomCommand;
use Illuminate\Queue\InteractsWithQueue;
use MyCompany\Accommodation\ReservationRepository;

class ReserveRoomCommandHandler
{

    protected $reservationRepository;
    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    /**
     * Handle the command.
     *
     * @param  ReserveRoomCommand  $command
     * @return void
     */
    public function handle(ReserveRoomCommand $command)
    {
        $reservation = new \MyCompany\Accommodation\ReservationValidator();
        if ($reservation->validate($command->start_date, $command->end_date, $command->rooms)) {
            $reservation = $reservationRepository->create([ 'date_start' => $command->start_date,
                'date_end' => $command->end_date,
                'rooms' => $command->rooms
            ]);
//            \Event::fire(new OfferWasCreated($offer));
            $reservation = \Event::fire(new RoomWasReserved($command->user, $reservation));
        }
    }

}
