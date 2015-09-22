<?php

namespace spec\MyCompany\Accommodation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MyCompany\User;
use MyCompany\Accommodation\Room;

class ReservationValidatorSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('MyCompany\Accommodation\ReservationValidator');
    }

    function its_start_date_must_come_before_the_end_date
    ($start_date, $end_date, $room)
    {
        $rooms = [$room];
        $start_date = '2015-06-03';
        $end_date = '2015-06-03';
        $this->shouldThrow('\InvalidArgumentException')
                ->duringValidate($start_date, $end_date, $rooms);
    }

    function it_cannot_be_made_for_more_than_fifteen_days(User $user, $start_date, $end_date, Room $room)
    {
        $start_date = '2015-06-01';
        $end_date = '2015-07-30';
        $rooms = [$room];
        $this->shouldThrow('\InvalidArgumentException')
                ->duringCreateNew($user, $start_date, $end_date, $rooms);
    }

    function it_cannot_contain_than_four_rooms(User $user, $start_date, $end_date, Room $room1, Room $room2, Room $room3, Room $room4, Room $room5)
    {
        $rooms = [$room1, $room2, $room3, $room4, $room5];
        $this->shouldThrow('\InvalidArgumentException')
                ->duringCreateNew($user, $start_date, $end_date, $rooms);
    }

}
