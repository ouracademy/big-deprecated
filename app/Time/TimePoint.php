<?php namespace App\Time;

use \DateTimeImmutable;

class TimePoint extends DateTimeImmutable implements TimeReference
{
    public static function createFromDate($day, $month, $year){
        return new TimePoint($day.'-'.$month.'-'.$year);
    }
    
    public function __toString(){
        return $this->format(self::W3C);
    }
}