<?php

use App\Time\TimePoint;

class TimePointTest extends TestCase
{
    private $timePoint;
    
    public function setUp(){
        $this->timePoint = TimePoint::createFromDate(28,3,2016);
    }
    
    public function testPrecision(){
        $timePoint2 = TimePoint::createFromDate(28,3,2016);
        $this->assertEquals($this->timePoint,$timePoint2);
    }
    
    public function testFormat(){
        $this->assertEquals('28-03-2016',$this->timePoint->format('d-m-Y'));
    }
}
