<?php

class Day
{
    private $pattern;
    private $days;

    public function __construct($pattern)
    {
        $this->pattern = $pattern;
        $this->processType();
    }

    /*
    * Method responsible for processing day type.
    */
    public function processType()
    {
        $regex = "/\b[a-z]+\b/";
        preg_match_all($regex, $this->pattern, $days);
        $this->days = $days[0];
        
        return $this;        
    }

    /*
    * Method responsible for returning days
    */
    public function getDays()
    {
        return $this->days;
    }
    
    /*
    * Method respnonsible for getting the sum of weekends
    */
    public function getSumOfWeekendDays()
    {      
        $weekendDays = 0;
        foreach($this->days as $day){
            $day  = strtolower($day);
            if ($day == "sat" || $day == "sun"){
                $weekendDays++;
            }
        }

        return  $weekendDays;
    }

    /*
    * Method responsible for verifying if weekend has been added to input
    */
    public function hasWeekend()
    {
 
        if (in_array("sat", $this->days) || in_array("sun", $this->days) ) {
            return true;            
        }

        return false;
    }
}