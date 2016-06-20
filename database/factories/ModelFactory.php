<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\Domain\User\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'rememberToken' => str_random(10),
    ];
});

$factory->define(App\Domain\Event\Event::class, function (Faker\Generator $faker) { 
    $name = $faker->name;
    $start = $faker->dateTime;
    $end = $faker->dateTimeBetween($start);
    
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'location' => $faker->address,
        'description' => $faker->text,
        'timePeriod' => new App\Domain\Time\TimePeriod($start, $end),
        'eventType' => $faker->randomElement(App\Domain\Event\Event::$types)
    ];
});

$factory->define(App\Domain\Party\Organization::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'location' => $faker->address
    ];
});


//$sol = App\Domain\Money\Currencies::SOL();
//'price' => new App\Domain\Money\Money($faker->randomNumber(2), $sol),
        