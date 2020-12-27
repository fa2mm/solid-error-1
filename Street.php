<?php

class Street extends Place
{
    protected $streetName;
    protected $houseNumber;

    public function setLocation($streetName, $houseNumber)
    {
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
    }
}
