<?php

use Illuminate\Database\Seeder;

class PartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Party::class,'organization', 5)->create()->each(function($party) {
            $organization = factory(App\Organization::class)->make();
            $organization->party_id = $party->id;
            $organization->save();
        });
        
        /*factory(App\Party::class, 'person', 5)->create()->each(function($party) {
            $person = factory(App\Person::class)->make();
            $person->party_id = $party->id;
            $person->save();
        });*/
    }
}
