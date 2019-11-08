<?php
namespace Src;
interface ReservableInterface
{
    public function addReservation(array $reservation);

    public function removeReservation($reservation);
}