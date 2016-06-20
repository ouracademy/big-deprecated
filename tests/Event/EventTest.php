<?php

use App\Domain\Event\Event;
use App\Domain\Time\TimePeriod;
use App\Domain\Party\Person;
use App\Domain\Event\EventRole;
use App\Domain\Event\EventRoleType;

class EventTest extends TestCase
{
    public function setUp(){
        $this->event= Event::CONFERENCE("Some name");
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongEventType(){
        new Event("A wrong event", "A wrong event type");
    }
    
    public function testName(){
        $this->assertEquals($this->event->getName(),'Some name');
    }
    
    public function testSlug(){
        $this->assertEquals($this->event->getSlug(),'some-name');
    }
    
    public function testEventType(){
        //TODO change 'CONFERENCE' to EventTypes::CONFERENCE()
        $this->assertEquals($this->event->getEventType(),'CONFERENCE');
    }
    
    public function testLocation(){
        $this->event->setLocation('Some location');
        $this->assertEquals($this->event->getLocation(),'Some location');
    }
    
    public function testDescription(){
        $this->event->setDescription('Some description');
        $this->assertEquals($this->event->getDescription(),'Some description');
    }
    
    public function testTimePeriod(){
        $timePeriod = new TimePeriod(date_create('28-03-2016'),date_create('04-04-2016'));
        $this->event->setTimePeriod($timePeriod);
        $this->assertEquals($this->event->getTimePeriod(), $timePeriod);
    }
    
    public function testAddPerformer(){
        $alex = new Person('Alex');
        $this->assertEmpty($this->event->getPerformers());
        $this->assertEmpty($this->event->getPerformersByRole(EventRoleType::EXPOSITOR()));
        $this->event->addPerformer($alex,EventRoleType::EXPOSITOR());
        $this->assertEquals(1,count($this->event->getPerformers()));
        $expositors = $this->event->getPerformersByRole(EventRoleType::EXPOSITOR());
        $this->assertEquals(1,count($expositors));
        $this->assertTrue($expositors->contains($alex));
        
        return $alex;
    }
    
    /**
     * @depends testAddPerformer
     */
    public function testAddRepeteadPerformer($alex){
        try{
            $this->event->addPerformer($alex, EventRoleType::EXPOSITOR());
        }catch(InvalidArgumentException $ignore){}
        //to be sure
        $this->assertEquals(1,count($this->event->getPerformers()));
        $this->assertEquals(1,count($this->event->getPerformersByRole(EventRoleType::EXPOSITOR())));
        //but okay with another role
        $this->event->addPerformer($alex,EventRoleType::ORGANIZER());
        $this->assertEquals(1,count($this->event->getPerformers()));
        $organizers = $this->event->getPerformersByRole(EventRoleType::ORGANIZER());
        $this->assertEquals(1,count($organizers));
        $this->assertTrue($organizers->contains($alex));
    }
}