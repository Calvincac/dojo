<?php
require_once "Price.php";

class Hotel
{
    private $rate;
    private $prices;
    private $customer;
    private $day;

    public function __construct($rate, $prices, Customer $customer,Day $day)
    {
        $this->rate = $rate;
        $this->prices = $prices;
        $this->customer = $customer;
        $this->day = $day;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getCustomer()
    {
        return $this->customer;
    }      
}
