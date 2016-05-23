<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    
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