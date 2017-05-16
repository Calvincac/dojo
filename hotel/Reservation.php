<?php


class Reservation
{
    private $hotels;

    public function __construct($hotels)
    {
        $this->hotels = $hotels;
    }


    public function calculateRate()
    {
        foreach($this->hotels as $hotel) {
            print_r($hotel);
        }
    }

    public function verifyWeekendRate () {

    }



}