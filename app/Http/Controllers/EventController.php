<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Data\EventRepository;
use App\Domain\Event\Event;
use App\Time\TimePoint;


class EventController extends Controller
{
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }
    
    public function index(){
        return view('events.index')->with('events',$this->eventRepository->all());
    }
    
    public function showBySlug($event){
        return view('events.show')->with('event', $event);
    }
}
