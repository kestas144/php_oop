<?php

use Src\Apartment;
use Src\BedRoom;
use Src\SingleRoom;

require __DIR__ . '/vendor/autoload.php';


$single = new SingleRoom(11,150);
$bed = new BedRoom(15,250);
$apartment = new Apartment(20,450);
echo $single->getData();
echo "\n";
echo $bed->getData();
echo "\n";
echo $apartment->getData();
echo "\n";

