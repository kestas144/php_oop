<?php

namespace Src;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $room->addReservation($reservation);
        echo "Room" . $room . " successfully booked for " . $reservation->getGuest();

    }


//Room <strong>1408</strong> successfully booked for <strong>Vardenis Pavardenis</strong>
//from <time>2019-04-20</time> to <time>2019-04-25</time>!
}