<?php
namespace Src;


abstract class Room implements ReservableInterface
{

    protected $roomType;
    protected $hasRestRoom;
    protected $hasBalcony;
    protected $bedCount;
    protected $roomNumber;
    protected $extras = [];
    protected $price;
    protected $reservations = [];

    public function __construct(int $bedCount,string $roomType,bool $hasRestRoom, bool $hasBalcony, array $extras)
    {
        $this->setBedCount($bedCount);
        $this->setRoomType($roomType);
        $this->setHasRestRoom($hasRestRoom);
        $this->setHasBalcony($hasBalcony);
        $this->setExtras($extras);
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getHasRestRoom()
    {
        if ($this->hasRestRoom === true){
            return 'has restroom';
        }
        return 'has no restroom';
    }

    /**
     * @param mixed $hasRestRoom
     */
    public function setHasRestRoom($hasRestRoom)
    {
        $this->hasRestRoom = $hasRestRoom;
    }

    /**
     * @return mixed
     */
    public function getHasBalcony()
    {
        if ($this->hasBalcony === true){
            return 'has balcony';
        }
        return 'has no balcony';
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony)
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addReservation(array $reservation)
    {
        if (!empty($this->reservations)&&($this->checkDublicateDate($reservation) === false)){
            throw new ReservationException('!!!!!!!Room is already reserved by this date');
       }
       else {
        array_push($this->reservations, $reservation);
    }

    }

    public function removeReservation( $reservation)
    {

    }
    private function checkDublicateDate(array $reservation)
    {
        foreach ($this->reservations as $key => $element) {
            if (
                (
                    ($reservation['startDate'] < $element['startDate'])
                    ||
                    ($reservation['startDate'] > $element['endDate'])
                )
                &&
                (
                    ($reservation['endDate'] < $element['startDate'])
                    ||
                    ($reservation['endDate'] > $element['endDate'])
                )
                )
                {
                return true;
            } else {
                return false;
            }
        }
    }



}