<?php

use App\Domain\Time\TimePeriod;
use App\Domain\Time\TimePoint;

class TimePeriodTest extends TestCase
{
    public function testCreateTimePeriod()
    {
        $timePeriod = new TimePeriod(TimePoint::createFromDate(28,3,2016),TimePoint::createFromDate(4,4,2016));
        $this->assertNotNull($timePeriod);
        $this->assertEquals($timePeriod->start(), TimePoint::createFromDate(28,3,2016));
        $this->assertEquals($timePeriod->end(), TimePoint::createFromDate(4,4,2016));
    }
    
    public function testOverlaps(){
        $timePeriod = new TimePeriod(TimePoint::createFromDate(28,3,2016),TimePoint::createFromDate(4,4,2016));
        $otherTimePeriod = new TimePeriod(TimePoint::createFromDate(2,4,2016),TimePoint::createFromDate(9,4,2016));
        $this->assertTrue($timePeriod->overlaps($otherTimePeriod));
        $otherTimePeriod2 = new TimePeriod(TimePoint::createFromDate(8,4,2016),TimePoint::createFromDate(9,4,2016));
        $this->assertFalse($timePeriod->overlaps($otherTimePeriod2));
    }
}
