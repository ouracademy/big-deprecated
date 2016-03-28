<?php

use App\Event;
use App\Money\Money;
use App\Money\Currency;
use App\Time\TimePoint;
use App\Party\Person;
use App\EventRole;
use App\EventRoleType;

class EventTest extends TestCase
{
    public function setUp(){
        $this->event= new Event("Some name", Event::CONFERENCE);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testWrongEventType(){
        new Event("A wrong event","A wrong type");
    }
    
    public function testName(){
        $this->assertEquals($this->event->getName(),'Some name');
    }
    
    public function testEventType(){
        $this->assertEquals($this->event->getEventType(),Event::CONFERENCE);
    }
    
    public function testLocation(){
        $this->event->setLocation('Some location');
        $this->assertEquals($this->event->getLocation(),'Some location');
    }
    
    public function testPrice(){
        $price = new Money(50, Currency::SOLES());
        $this->event->setPrice($price);
        $this->assertEquals($this->event->getPrice(),$price);
    }
    
    public function testDescription(){
        $this->event->setDescription('Some description');
        $this->assertEquals($this->event->getDescription(),'Some description');
    }
    
    public function testTimeReference(){
        $this->event->setTimeReference(new TimePoint('24','03','2016'));
        $this->assertEquals($this->event->getTimeReference(),new TimePoint('24','03','2016'));
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