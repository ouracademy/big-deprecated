<?php

use App\Domain\Event\Event;

class EntityHelperTest extends TestCase
{
    public function testEntityMake(){
        $event = entity(Event::class)->make();
        $this->assertNotEmpty($event);
    }
}
