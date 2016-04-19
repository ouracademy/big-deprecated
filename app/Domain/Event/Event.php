<?php namespace App\Domain\Event;

use App\Money\Money;
use App\Time\TimeReference;
use InvalidArgumentException;
use App\Domain\Party\Party;
use SplObjectStorage;

//TODO add photo property
class Event
{
    const CONFERENCE = "Conference";
    private $name, $price, $description, $location, $timeRefence, $eventType;
    private $eventRoles;//use SplObjectStorage for performance concerns
    
    public function __construct($name, $eventType){
        $this->name = $name;
        $this->setEventType($eventType);
        $this->eventRoles = new SplObjectStorage();
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getEventType(){
        return $this->eventType;
    }
    
    private function setEventType($eventType){
        switch ($eventType) {
            case self::CONFERENCE:
                $this->eventType = $eventType;
                break;
            
            default:
                throw new InvalidArgumentException("Wrong event type");
                break;
        }
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function setPrice(Money $price){
        $this->price = $price;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
    
    public function getLocation(){
        return $this->location;
    }
    
    public function setLocation($location){
        $this->location = $location;
    }
    
    public function getTimeReference(){
        return $this->timeRefence;
    }
    
    public function setTimeReference(TimeReference $timeRefence){
        $this->timeRefence = $timeRefence;
    }
    
    public function addPerformer(Party $performer, EventRoleType $eventRoleType){
        new EventRole($this, $performer, $eventRoleType);
    }
    
    function friendAddEventRole(EventRole $eventRole){
        $this->eventRoles->attach($eventRole);
    }
    
    public function getPerformers(){
        $performers = new SplObjectStorage();
        
        foreach($this->eventRoles as $eventRole){
            $performers->attach($eventRole->getPerfomer());
        }
        
        return $performers;
    }
    
    public function getPerformersByRole(EventRoleType $roleType){
        $performers = new SplObjectStorage();
        
        foreach($this->eventRoles as $eventRole){
            if($eventRole->getType() == $roleType)
                $performers->attach($eventRole->getPerfomer());
        }
        
        return $performers;
    }
}