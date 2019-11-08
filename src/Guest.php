<?php
namespace Src;

class Guest
{
    private $firstName;
    private $lastName;

    function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName ;
    }


}