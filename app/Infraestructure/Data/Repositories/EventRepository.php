<?php namespace App\Infraestructure\Data\Repositories;

use App\Domain\Event\EventRepository as EventRepositoryContract;
use App\Domain\Event\Event;
use Doctrine\ORM\EntityManagerInterface;

class EventRepository implements EventRepositoryContract
{   
    protected $entityManager;
    protected $objectRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->objectRepository = $this->entityManager->getRepository(Event::class);
    }
    
    public function all(){
        return $this->objectRepository->findAll();
    }
    
    public function add(Event $event){
        $this->entityManager->persist($event);
        $this->entityManager->flush();
    }

    public function findById($id){
        return $this->objectRepository->find($id);
    }
}