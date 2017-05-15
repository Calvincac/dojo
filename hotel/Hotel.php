<?php
require_once "Price.php";

class Hotel
{
    private $rate;
    private $prices;
    private $customerType;
    private $day; // object Day
    private $pattern;

    public function __construct($rate, $prices, $customer,Day $day)
    {
        $this->rate = $rate;
        $this->price = $price;
        $this->customer = $customer;
        $this->day = $day;
        $this->pattern = $pattern;
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
