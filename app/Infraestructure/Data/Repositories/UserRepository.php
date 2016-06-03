<?php namespace App\Infraestructure\Data\Repositories;

use App\Domain\User\UserRepository as UserRepositoryContract;
use App\Domain\User\User;
use Doctrine\ORM\EntityManagerInterface;

class UserRepository implements UserRepositoryContract
{   
    protected $entityManager;
    protected $objectRepository;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
        $this->objectRepository = $this->entityManager->getRepository(User::class);
    }
    
    public function add(User $user){
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}