<?php

use Illuminate\Database\Seeder;
use App\Domain\Event\EventRepository;
use App\Domain\Event\Event;

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
        $events = entity(Event::class, 5)->make();
        $event = Event::CONFERENCE("TEAM BUILDING");
        $event->setDescription('Construyendo equipos sólidos');
        $event->setLocation('Lima, Perú');
        $start = new DateTime('2016-11-14');
        $end = new DateTime('2016-11-15');
        $timePeriod = new App\Domain\Time\TimePeriod($start, $end);
        $event->setTimePeriod($timePeriod);
        $event->imageURL = 'img/events/team-building.jpg';

        $events->push($event);
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