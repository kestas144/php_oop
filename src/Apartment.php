<?php
namespace Src;

class Apartment extends Room
{

    private $extraArray = ['TV', 'air-conditioner','refrigerator','kitchen box', 'minibar', 'bathtub', 'free Wi-fi'];

    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct(4, 'Diamond', true, true, $this->extraArray);
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