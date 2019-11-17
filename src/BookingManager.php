<?php

namespace Src;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $array = ['startDate' => $reservation->getStartDate(), 'endDate' => $end = $reservation->getEndDate()];
        $room->addReservation($array);
        $reservationArray = explode(" ", $reservation);
        $name = $reservationArray [0] . " " . $reservationArray[1];
        $format =
            "Room <strong>%s</strong> successfully booked for <strong>%s</strong> from <time>%s</time> to <time>%s</time>!"."\n";
        echo sprintf($format, $room, $name, $reservationArray[2], $reservationArray[3]);
    }
}


