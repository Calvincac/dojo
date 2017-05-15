<?php

class Customer
{ 
    private $type;
    private $pattern;

    public function __construct($pattern)
    {
        $this->processTypeOfCustomer();
    }

    /*
    * Method responsible for processing input in order to get the type of customer.
    */
    public function processTypeOfCustomer()
    {
        $regex = "/^([\w]+)/";
        preg_match_all($regex, $this->pattern, $customerType);
        $this->type = $customerType[0];
        
        return $this; 
    }

    /*
    * Method responsible for verifying if the type of customer is Regular.
    */
    public function isRegularCustomer()
    {
        $type = strtolower($this->type);
        if ($type == "regular"){
            return true;
        }
        return false;
    } 
}