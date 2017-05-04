<?php

class Day
{
    private $typeOfDay;

    public function __construct($type)
    {
        $this->$typeOfDay = $type;
    }

}