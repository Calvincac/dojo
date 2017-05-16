<?php
require_once "Price.php";

class Hotel
{
    private $rate;
    private $prices;
    private $customer;
    private $day; // object Day

    public function __construct($rate, $prices, $customer,Day $day)
    {
        $this->rate = $rate;
        $this->prices = $prices;
        $this->customer = $customer;
        $this->day = $day;
    }


    /*
    * Method responsible for returning customer type.
    */
    public function getCustomerType()
    {
        return $this->customer;
    }

    /*
    * Method responsible for caculating fare based on type of Customer and Day.
    */
    public function calculateRateBasedOnDays()
    {
        $arrDays = $this->day->getDays();

        if($this->isRegularCustomer()) {
            if ($this->day->hasWeekend()) {
                $weekendDays = $this->day->getSumOfWeekendDays();
            }
        }        
    }    
}
