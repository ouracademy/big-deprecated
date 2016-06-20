<?php namespace App\Domain\Event;

use App\Domain\Support\NamedObject;
use App\Domain\Support\DomainObject;
use App\Domain\Money\Money;
use App\Domain\Money\Currencies;
use App\Domain\Time\TimePeriod;
use InvalidArgumentException;
use App\Domain\Party\Party;
use SplObjectStorage;

//TODO add photo property
class Event
{
    use NamedObject, DomainObject;
    
    public static $types = [
        "CONFERENCE", "WORKSHOP"
        ];
    
    private $description;
    private $location;
    private $timePeriod;
    private $eventType;
    private $slug;
    private $eventRoles;//use SplObjectStorage for performance concerns
    
    public static function __callStatic($method, $arguments)
    {
        return new self($arguments[0], $method);
    }
    
    public function __construct($name, $eventType){
        $this->name = $name;
        $this->addEventType($eventType);
        $this->eventRoles = new SplObjectStorage();
        $this->slug = str_slug($name);
    }
    
    private function addEventType($eventType){
        if(in_array($eventType,self::$types)){
            $this->eventType = $eventType; 
        }else {
            throw new InvalidArgumentException("Wrong event type");
        }
    }
    
    public function getEventType(){
        return $this->eventType;
    }
    
    public function getSlug(){
        return $this->slug;
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
    
    public function getTimePeriod(){
        return $this->timePeriod;
    }
    
    public function setTimePeriod(TimePeriod $timePeriod){
        $this->timePeriod = $timePeriod;
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