<?php

class Place
{
    protected $longitude;
    protected $latitude;

    public function setLocation($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }
}
