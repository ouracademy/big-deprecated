<?php namespace App\Time;

use \DateTimeImmutable;
use \DateTime;

class TimePoint extends DateTimeImmutable implements TimeReference
{
    public static function createFromDate($day, $month, $year){
        return new TimePoint($day.'-'.$month.'-'.$year);
    }
}