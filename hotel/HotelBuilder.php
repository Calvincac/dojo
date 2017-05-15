<?php
require_once "Hotel.php";

class HotelBuilder {

    private $hotels;
    private $prices;
    

    public function __construct()
    {
        $this->buildHotels();
    }

    public function buildHotels()
    {
        //$rate, $price, $customer,Day $day, $pattern
        $lakewoodPrices = [
            'weekend' => [90, 80],
            'weekday' => [110, 90] 
            ];

        $bridgewoodPrices = [
            'weekend' => [60, 50],
            'weekday' => [160, 110] 
            ];
        $ridgewoodPrices = [
            'weekend' => [150, 40],
            'weekday' => [220, 100] 
            ];
        //terminar de implementar
        $lakewood =  new Hotel(3, $lakewoodPrices  );
        $bridgewood = new Hotel();
        $ridgewood = new Hotel();
        $this->hotels = [$lakewood, $bridgewood, $ridgewood];

        return $this->hotels;
    }
   
}