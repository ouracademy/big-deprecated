<?php

namespace App\Http\Controllers\API\InformationRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Domain\Event\EventRepository;

class ListController extends Controller
{
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }
    
    public function index($eventId, Request $request){
        $fetchedEvent = $this->eventRepository->findById($eventId);

        return response()->json([
            'data' => $fetchedEvent->getInformationRequests()->toArray()
        ]);
    }
}
