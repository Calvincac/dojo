<?php
require_once "Price.php";

class Hotel
{
    private $rate;
    private $price;
    private $customerType;
    private $day;

    public function __construct($rate, $price, $customer, $day)
    {
        $this->rate = $rate;
        $this->price = $price;
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
        if($this->isRegularCustomer()) {
            
        }
        
    }

    /*
    * Method responsible for processing input in order to get the type of customer.
    */
    public function processTypeOfCustomer($pattern)
    {
        $regex = "/^([\w]+)/";
        preg_match_all($regex, $pattern, $customerType);
        $this->customerType = $customerType[0];
        
        return $this; 
    }

    /*
    * Method responsible for verifying if the type of customer is Regular.
    */
    public function isRegularCustomer()
    {
        $type = strtolower($this->customer);
        if ($type == "regular"){
            return true;
        }
        return false;
    }

}
