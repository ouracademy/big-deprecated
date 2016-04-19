<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Data\EventRepository;
use App\Domain\Event\Event;

class EventController extends Controller
{
    private $eventRepository;
    
    public function __construct(){
        $this->eventRepository = new EventRepository();
        $this->eventRepository->add(
            new Event("¿Por qué el Lean Startup lo va a cambiar todo ?", Event::CONFERENCE
        ));
        $this->eventRepository->add(
            new Event("STARTUP WEEKEND EBUSINESS", Event::CONFERENCE
        ));
        $this->eventRepository->add(
            new Event("Extreme Programming 20 years later by Kent Beck", Event::CONFERENCE
        ));
    }
    
    public function index(){
        return view('events.index')->with('events',$this->eventRepository->all());
    }
    
    public function show($slug){
        foreach($this->eventRepository->all() as $event){
            if(str_slug($event->getName()) == $slug){
                $eventToShow = $event;
                break;
            }
        }
        
        dd($eventToShow);
    }
}
