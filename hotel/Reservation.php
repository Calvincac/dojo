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
            if ($hotel->getCustomer()->isRegular()) {
               $total = $this->calculateRateRegular($hotel);
               
            }            
        }
    }

    public function calculateRateRegular($hotel)
    {
        if ($hotel->getDay()->hasWeekend()) {
            $sumOfweekends =  $hotel->getDay()->getSumOfWeekendDays();
            $sumOfweekDays =  $hotel->getDay()->getSumOfWeekDays();
            $weekendPrice = $this->calculateWeekendRate($sumOfweekends, $hotel);
            $weekPrice = $this->calculateWeekRate($sumOfweekDays, $hotel);
            $total = $weekPrice + $weekendPrice;

            return $total;
        }
    }

    public function calculateWeekendRate($sumOfweekends, $hotel)
    {
        $weekendPrice =  $hotel->getPrice()['weekend'][0];
        $weekendPrice = $weekendPrice * $sumOfweekends;

        return $weekendPrice;                
    }

    public function calculateWeekRate($sumOfweekDays, $hotel)
    {
        $weekPrice =  $hotel->getPrice()['weekday'][0];
        $weekPrice =  $weekPrice * $sumOfweekDays;
        
        return $weekPrice;
    }


}