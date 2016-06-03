<?php

use App\Domain\Event\Event;

class LaravelHelperTest extends TestCase
{
    public function testBCrypt(){
        $value = bcrypt('password');
        $this->assertNotSame('password', $value);
    }
}
