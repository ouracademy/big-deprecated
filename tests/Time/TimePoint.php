<?php

use App\Time\TimePoint;

class TimePointTest extends TestCase
{
    public function testPrecision(){
        $timePoint1 = TimePoint::createFromDate(28,3,2016);
        $timePoint2 = TimePoint::createFromDate(28,3,2016);
        $this->assertEquals($timePoint1,$timePoint2);
    }
}
