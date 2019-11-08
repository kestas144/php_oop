<?php

use Src\Apartment;
use Src\BedRoom;
use Src\BookingManager;
use Src\Guest;
use Src\Reservation;
use Src\SingleRoom;

require __DIR__ . '/vendor/autoload.php';


//$bed = new BedRoom(15,250);
//
//$apartment = new Apartment(20,450);

$single = new SingleRoom(1408,99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($single, $reservation);







