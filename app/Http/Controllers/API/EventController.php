<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Domain\Event\EventRepository;
use App\Domain\Event\Event;

class EventController extends Controller
{
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }
    
    public function index(){
        //TODO move this to a EventDTO...
        $eventsInJSON = array();
        foreach($this->eventRepository->all() as $event){
            array_push($eventsInJSON, [
                "name" => $event->getName(),
                "slug" => $event->getSlug(),
                "timePeriod" => [
                    "start" => $event->getTimePeriod()->start()->format('c'),
                    "end" => $event->getTimePeriod()->end()->format('c')
                ]
            ]);
        }
        
        return response()->json([
            'data' => $eventsInJSON
        ]);
    }

    public function showBySlug($slug){
        //TODO test with no slug
        foreach($this->eventRepository->all() as $event){
            if($event->getSlug() == $slug){
                $fetchedEvent = $event;
                break;
            }
        }

        //TODO move this to a TicketDTO...
         $ticketsInJSON = array();
        foreach($fetchedEvent->getTickets() as $ticket){
            array_push($ticketsInJSON, [
                "name" => $ticket->getName(),
                "quantityAvailable" => $ticket->getQuantityAvailable(),
                "price" => [
                    "amount" => $ticket->getPrice()->getAmount(),
                    "currency" => $ticket->getPrice()->getCurrency()->getCode()
                ]
            ]);
        }

        return response()->json([
            'data' => [
                'id' => $fetchedEvent->getId(),
                'name' => $fetchedEvent->getName(),
                'description' => $fetchedEvent->getDescription(),
                'tickets' => $ticketsInJSON,
                "timePeriod" => [
                    "start" => $event->getTimePeriod()->start()->format('c'),
                    "end" => $event->getTimePeriod()->end()->format('c')
                ],
                'imageURL' => $event->imageURL
            ]
        ]);
    }
}
