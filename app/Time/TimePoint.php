<?php namespace App\Time;

class TimePoint extends TimeReference
{
    private $day, $month, $year;
    
    public function __construct($day, $month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
}