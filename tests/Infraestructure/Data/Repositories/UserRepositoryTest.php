<?php

use App\Domain\User\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Infraestructure\Data\Repositories\UserRepository;

class UserRepositoryTest extends TestCase
{
    use DatabaseMigrations;
    
    protected $objectRepository;
    protected $repository;
    
    protected function setUp(){
        parent::setUp();
        $entityManager = $this->app->make('em');
        $this->objectRepository = $entityManager->getRepository(User::class);
        $this->repository = new UserRepository($entityManager);
    }
    
    public function testAdd(){
        $user = entity(User::class)->make();
        $this->repository->add($user);
        
        $fetchedUser = $this->objectRepository->find($user->getId());
        $this->assertEquals($fetchedUser, $user);
    }
}
