<?php


class Reservation
{
    private $hotels;
    private $cheapestPrice = PHP_INT_MAX;
    private $cheapestHotel = null;

    public function __construct($hotels)
    {
        $this->hotels = $hotels;
    }


    public function calculateRate()
    {
        foreach($this->hotels as $hotel) {
            if ($hotel->getCustomer()->isRegular()) {
                $regularCode = 0;
                $total = $this->calculateRateRegular($hotel, $regularCode);
               $this->getCheapestHotel =  $this->getCheapestHotel($total, $hotel);            
            } else {
                $rewardCode = 1;
                $total = $this->calculateRateReward($hotel, $rewardCode);
                $this->getCheapestHotel = $this->getCheapestHotel($total, $hotel);                
            }                       
        }
        
        return $this->getCheapestHotel;         
    }

    public function calculateRateRegular($hotel, $code)
    {
        $weekendPrice = 0;

        if ($hotel->getDay()->hasWeekend()) {
            $sumOfweekends =  $hotel->getDay()->getSumOfWeekendDays();            
            $weekendPrice = $this->calculateWeekendRate($sumOfweekends, $hotel, $code);                      
        }

        $sumOfweekDays =  $hotel->getDay()->getSumOfWeekDays();
        $weekPrice = $this->calculateWeekRate($sumOfweekDays, $hotel, $code);
        $total = $weekPrice + $weekendPrice; 

        return $total;
    }

    public function calculateRateReward($hotel, $code)
    {
        $weekendPrice = 0;

        if ($hotel->getDay()->hasWeekend()) {
            $sumOfweekends =  $hotel->getDay()->getSumOfWeekendDays();            
            $weekendPrice = $this->calculateWeekendRate($sumOfweekends, $hotel, $code);                      
        }
        
        $sumOfweekDays =  $hotel->getDay()->getSumOfWeekDays();
        $weekPrice = $this->calculateWeekRate($sumOfweekDays, $hotel, $code);
        $total = $weekPrice + $weekendPrice;

        return $total;
    }

    public function calculateWeekendRate($sumOfweekends, $hotel, $code)
    {
        $weekendPrice =  $hotel->getPrice()['weekend'][$code];
        $weekendPrice = $weekendPrice * $sumOfweekends;

        return $weekendPrice;                
    }

    public function calculateWeekRate($sumOfweekDays, $hotel, $code)
    {
        $weekPrice =  $hotel->getPrice()['weekday'][$code];
        $weekPrice =  $weekPrice * $sumOfweekDays;
        
        return $weekPrice;
    }

    public function getCheapestHotel($total, $hotel)
    {       
        if($total < $this->cheapestPrice ) {
            $this->cheapestPrice = $total;
            $this->cheapestHotel = $hotel->getHotelName();
        }
        return $this->cheapestHotel;
    }
}