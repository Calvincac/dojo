<?php

class Day
{
    private $typeOfDay;
    private $days;

    public function __construct($type)
    {
        $this->typeOfDay = $type;
    }

    public function processType()
    {
        $pattern = "/\b[a-z]+\b/";
        preg_match_all($pattern, $this->typeOfDay, $days);
        $this->days = $days[0];
        
        return $this;        
    }

    public function getDay()
    {
        return $this->days;
    }

}