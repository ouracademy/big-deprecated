<?php namespace App\Domain\Event;

use App\Domain\Party\Party;

class EventRole
{
    private $event, $performer, $eventRoleType;
    
    public function __construct(Event $event, Party $performer,
                                    EventRoleType $eventRoleType){
        $this->event = $event;
        $this->event->friendAddEventRole($this);
        $this->performer = $performer;
        $this->performer->friendAddEventRole($this);
        $this->eventRoleType = $eventRoleType;
    }
    
    public function getEvent(){
        return $this->event;
    }
    
    public function getPerfomer(){
        return $this->performer;
    }
    
    public function getType(){
        return $this->eventRoleType;
    }
}