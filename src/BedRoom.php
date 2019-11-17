<?php
namespace Src;

final class BedRoom extends Room
{
    private $extraArray = ['TV', 'air-conditioner','refrigerator', 'minibar', 'bathtub'];

    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct(2, 'Gold', true, true, $this->extraArray);
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }

    public function __toString() :string
    {
        return $this->roomNumber;
    }
}