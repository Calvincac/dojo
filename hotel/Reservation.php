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
                $regularCode = 0;
               $total = $this->calculateRateRegular($hotel, $regularCode);            
            } else {
                $rewardCode = 1;
                $total = $this->calculateRateReward($hotel, $rewardCode);
            }           
        }
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
        $weekenPrice = 0;

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


}