<?php namespace App\Services\Event;

use App\Domain\Event\Event;
use App\Domain\Event\InformationRequest;
use App\Domain\Event\EventRepository;
use App\Domain\Event\InformationRequestRepository;

class RegisterInformationRequest
{
    private $eventRepository;
    private $informationRequestRepository;
    
    public function __construct(
        EventRepository $eventRepository,
        InformationRequestRepository $informationRequestRepository){
        $this->eventRepository = $eventRepository;
        $this->informationRequestRepository = $informationRequestRepository;
    }
    
    // private function validate($data)
    // {
    //     assert(in_array($name, $this->fields));
    //     assert(count($arguments) == 1);
        
    //     $this->data[$name] = $arguments[0];
    //     return $this;
    // }
    
    public function execute(array $data){
        $event = $this->eventRepository->findById($data['eventId']);
        $informationRequest = new InformationRequest(
                $data['firstname'],
                $data['lastname'],
                $data['email'],
                $data['cellphone'],
                $event
            );
        $informationRequest->setMessage($data['message']); 
        $this->informationRequestRepository->add($informationRequest);
    }
}