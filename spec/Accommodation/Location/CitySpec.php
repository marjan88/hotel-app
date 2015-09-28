<?php

namespace spec\MyCompany\Accommodation\Location;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CitySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyCompany\Accommodation\Location\City');
    }
}
