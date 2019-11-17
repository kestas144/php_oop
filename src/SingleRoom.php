<?php

namespace Src;
final class SingleRoom extends Room
{
    private $extraArray = ['TV', 'air-conditioner'];

    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct(1, 'Standard', true, false, $this->extraArray);
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }

    public function __toString() :string
    {
        return $this->roomNumber;
    }


}