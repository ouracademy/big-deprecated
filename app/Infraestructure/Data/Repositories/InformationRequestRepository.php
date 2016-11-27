<?php namespace App\Infraestructure\Data\Repositories;

use App\Domain\Event\InformationRequestRepository as InformationRequestRepositoryContract;
use App\Domain\Event\InformationRequest;
use Doctrine\ORM\EntityManagerInterface;

class InformationRequestRepository implements InformationRequestRepositoryContract
{   
    protected $entityManager;
    protected $objectRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->objectRepository = $this->entityManager->getRepository(InformationRequest::class);
    }
    
    public function add(InformationRequest $informationRequest){
        $this->entityManager->persist($informationRequest);
        $this->entityManager->flush();
    }

    public function findBy($eventId){
        return $this->objectRepository->findBy(['event' => $eventId]);
    }
}