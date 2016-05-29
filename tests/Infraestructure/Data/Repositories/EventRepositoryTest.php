<?php

use App\Domain\Event\Event;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Infraestructure\Data\Repositories\EventRepository;

class EventRepositoryTest extends TestCase
{
    use DatabaseMigrations;
    
    protected $objectRepository;
    protected $repository;
    
    protected function setUp(){
        parent::setUp();
        $entityManager = $this->app->make('em');
        $this->objectRepository = $entityManager->getRepository(Event::class);
        $this->repository = new EventRepository($entityManager);
    }
    
    public function testAll(){
        entity(Event::class, 2)->create();
        $this->assertEquals(count($this->repository->all()),2);
    }
    
    public function testAdd(){
        $event = entity(Event::class)->make();
        $this->repository->add($event);
        
        $fetchedEvent = $this->objectRepository->find($event->getId());
        $this->assertEquals($event, $fetchedEvent);
    }
}
