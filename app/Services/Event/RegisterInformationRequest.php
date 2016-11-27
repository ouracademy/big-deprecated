<?php namespace App\Services\Event;

use App\Domain\Event\Event;
use App\Domain\Event\InformationRequest;
use App\Domain\Event\EventRepository;

class RegisterInformationRequest
{
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
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
                $data['cellphone']
            );

        $informationRequest->setMessage($data['message']);
        $event->addInformationRequest($informationRequest);
        $this->eventRepository->add($event);
    }
}