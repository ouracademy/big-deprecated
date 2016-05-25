<?php namespace App\Data;

use App\Domain\Event\EventRepository as EventRepositoryContract;
use App\Domain\Event\Event;

class EventRepository implements EventRepositoryContract
{   
/*    private $genericRepository;
    
    public function __construct(ObjectRepository $genericRepository){
        $this->genericRepository = $genericRepository;
    }
    
    public function all(){
        return $this->genericRepository->findAll();
    }
    
    public function add(Event $group){
        $this->events->add($group);
    }*/
}