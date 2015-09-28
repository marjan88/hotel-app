<?php

namespace MyCompany\Accommodation;

use MyCompany\Accommodation\RepositoryInterface;

class ReservationRepository implements RepositoryInterface
{

    private $reservation;

    function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function create($attributes)
    {
        $modelAttributes = array_except($attributes, ['rooms']);
        $reservation = $this->reservationModel->create($modelAttributes);
        if (isset($attributes['rooms'])) {
            $reservation->rooms()->sync($attributes['rooms']);
        }
        return $reservation;
    }

    public function rooms()
    {
        return $this->belongsToMany('MyCompany\Accommodation\Room')->withTimestamps();
    }

}
