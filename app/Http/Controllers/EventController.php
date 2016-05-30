<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Domain\Event\EventRepository;
use App\Domain\Event\Event;

class EventController extends Controller
{
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }
    
    public function index(){
        return view('events.index')->with('events',$this->eventRepository->all());
    }
    
    public function showBySlug($slug){
        
        foreach($this->eventRepository->all() as $event){
            if($event->getSlug() == $slug){
                $fetchedEvent = $event;
                break;
            }
        }
        return view('events.show')->with('event', $fetchedEvent);
    }
}
