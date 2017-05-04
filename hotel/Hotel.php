<?php
require_once "Price.php";

class Hotel
{
    private $rate;
    private $price;
    private $customer;
    private $day;

    public function __construct($rate, $price, $customer, $day)
    {
        $this->rate = $rate;
        $this->price = $price;
        $this->customer = $customer;
        $this->day = $day;
    }



}
