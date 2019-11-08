<?php

use Src\SingleRoom;

require __DIR__ . '/vendor/autoload.php';


$test = new SingleRoom(11,150);
echo $test->getData();