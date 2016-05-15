<?php namespace App\Data;

use App\Domain\Event\Event;
use App\Domain\Support\Set;

class EventRepository
{   
    private $events;
    
    public function __construct(){
        $this->events = new Set;
    }
    
    public function all(){
        return $this->events->all();
    }
    
    public function add(Event $group){
        $this->events->add($group);
    }
}