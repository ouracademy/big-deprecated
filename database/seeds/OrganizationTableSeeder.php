<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        entity(App\Domain\Party\Organization::class, 5)->create();
    }
}
