<?php

use Illuminate\Database\Seeder;
use App\Domain\Event\EventRepository;

class EventTableSeeder extends Seeder
{
    
    private $eventRepository;
    
    public function __construct(EventRepository $eventRepository){
        $this->eventRepository = $eventRepository;
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = entity(App\Domain\Event\Event::class, 5)->make();
        foreach($events as $event){
            $this->addTickets($event);
            $this->eventRepository->add($event);
        }
    }
    
    private function addTickets($event){
        foreach($this->getRamdomTickets() as $ticket){
            $event->addTicket($ticket);
        }
    }
    
    private function getRamdomTickets(){
        $randomNumberOfTickets =  rand(1,2);
        $popularTickets = entity(App\Domain\Event\Ticket::class)->make();
        
        if($randomNumberOfTickets == 2){
            $vipTickets = entity(App\Domain\Event\Ticket::class, 'VIP')->make();
            return array($popularTickets,$vipTickets);
        }else{
            return array($popularTickets);
        }
    }
}