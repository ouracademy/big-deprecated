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
        //$events = entity(Event::class, 5)->make();
        $bigTalk1 = Event::CONFERENCE("Coaching & Team Building");
        $bigTalk1->setDescription('Construyendo equipos sólidos');
        $bigTalk1->setLocation('Lima, Perú');
        $start = new DateTime('2016-11-14');
        $end = new DateTime('2016-11-15');
        $timePeriod = new App\Domain\Time\TimePeriod($start, $end);
        $bigTalk1->setTimePeriod($timePeriod);
        $bigTalk1->imageURL = 'img/events/team-building.jpg';

        //$events->push($bigTalk1);
        //foreach($events as $event){
            $this->addTickets($bigTalk1);
            $this->eventRepository->add($bigTalk1);
        //}
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