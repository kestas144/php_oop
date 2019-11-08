<?php

namespace Src;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;
    private const FORMAT = 'Y-m-d';

    function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $this->setDate($startDate);
        $this->endDate = $this->setDate($endDate);
        $this->guest = $guest;
    }

    public function getStartDate() :string
    {
        return $this->startDate;
    }
    public function getEndDate() :string
    {
        return $this->endDate;
    }
    private function setDate(\DateTime $date): string
    {
        return date_format($date, self::FORMAT);
    }
     /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function __toString() :string
    {
        return $this->guest ." ". $this->startDate ." ". $this->endDate;
    }
}