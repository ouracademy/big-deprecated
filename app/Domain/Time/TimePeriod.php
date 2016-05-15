<?php

namespace App\Domain\Time;
use App\Domain\Support\Range;

class TimePeriod extends Range implements TimeReference{
    //TODO Change if want to create open time periods
    //const INFINITY = date('Y-m-d H:i:s', PHP_INT_MAX);
    
    public function __construct(TimePoint $startDate,TimePoint  $endDate){
        parent::__construct($startDate, $endDate);
    }
   
    public function format ($format){
        
    }
}
