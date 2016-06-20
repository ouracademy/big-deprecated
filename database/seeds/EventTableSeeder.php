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
            $ticket = entity(App\Domain\Event\Ticket::class)->make();
            $event->addTicket($ticket);
            $this->eventRepository->add($event);
        }
    }
    
}