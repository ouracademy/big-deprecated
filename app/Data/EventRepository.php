<?php namespace App\Data;

use App\Domain\Event\EventRepository as EventRepositoryContract;
use App\Domain\Event\Event;
use App\Domain\Support\Set;

class EventRepository implements EventRepositoryContract
{   
    private $events;
    
    public function __construct(){
        $this->events = new Set;
    }
    
    public function all(){
        return $this->events->all();
    }
    
    public function add(Event $event){
        $this->events->add($event);
    }
}