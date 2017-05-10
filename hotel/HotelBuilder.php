<?php
require_once "Hotel.php";

class HotelBuilder {

    private $hotels;

    public function __construct()
    {
        $this->buildHotels();
    }

    public function buildHotels()
    {
        //$rate, $price, $customer,Day $day, $pattern

        $lakewood =  new Hotel();
        $bridgewood = new Hotel();
        $ridgewood = new Hotel();
        $this->hotels = [$lakewood, $bridgewood, $ridgewood];

        return $this->hotels;
    }
   
}