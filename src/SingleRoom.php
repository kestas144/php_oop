<?php

namespace Src;
class SingleRoom extends Room
{
    private $extraArray = ['TV', 'air-conditioner'];

    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct(1, 'Standard', true, false, $this->extraArray);
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