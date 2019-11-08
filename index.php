<?php

use Src\Apartment;
use Src\BedRoom;
use Src\BookingManager;
use Src\Guest;
use Src\Reservation;
use Src\SingleRoom;

require __DIR__ . '/vendor/autoload.php';


$single = new SingleRoom(1408,99);
$bed = new BedRoom(15,250);
$apartment = new Apartment(20,450);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($single, $reservation);

//echo $single->getData();
//echo "\n";
//echo $bed->getData();
//echo "\n";
//echo $apartment->getData();
//echo "\n";






