<?php
namespace Src;

class BedRoom extends Room
{
    private $extraArray = ['TV', 'air-conditioner','refrigerator', 'minibar', 'bathtub'];

    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct(2, 'Gold', true, true, $this->extraArray);
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }
    public function getData(){
        return
            "bedCount ". $this->getBedCount()
            ." RoomType ".$this->getRoomType()
            ." ".$this->getHasRestRoom()
            ." ".$this->getHasBalcony()
            ." Price ".$this->getPrice()
            ." RoomNumber ".$this->getRoomNumber();


    }
}