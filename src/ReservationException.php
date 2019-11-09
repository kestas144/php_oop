<?php
namespace Src;

class ReservationException extends \Exception
{
    public function __construct($message) {
        parent::__construct($message);
    }
}