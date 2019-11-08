<?php

namespace Src;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }
    public function getGuest(){
        return $this->guest;
    }


}