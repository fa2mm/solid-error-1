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

class Place
{
    protected $longitude;
    protected $latitude;

    public function setLocation($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function getCoordinates()
    {
        return "$this->longitude:$this->latitude";
    }
}
