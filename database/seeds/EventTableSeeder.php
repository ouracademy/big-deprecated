<?php

use Illuminate\Database\Seeder;
use Doctrine\ORM\EntityManager;

class EventTableSeeder extends Seeder
{
    
    private $entityManager;
    
    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        entity(App\Domain\Event\Event::class, 5)->create();
    }
    
}