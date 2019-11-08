<?php
namespace Src;
interface ReservableInterface
{
    public function addReservation($reservation);

    public function removeReservation($reservation);
}