<?php

namespace App\Http\Controllers\API\InformationRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Domain\Event\InformationRequestRepository;
use App\Domain\Event\EventRepository;

class ListController extends Controller
{
    private $service;
    
    public function __construct(
        
        EventRepository $eventRepository,
        InformationRequestRepository $service){
        $this->service = $service;
        $this->eventRepository = $eventRepository;
    }
    
    public function index($eventId, Request $request){

        foreach($this->eventRepository->all() as $event){
            if($event->getId() == $eventId){
                $fetchedEvent = $event;
                break;
            }
        }

        return response()->json([
            'data' => $this->service->findBy($fetchedEvent->getId())
        ]);
    }
}
