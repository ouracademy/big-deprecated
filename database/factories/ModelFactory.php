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

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Domain\Event\Event::class, function (Faker\Generator $faker) { 
    $name = $faker->name;
    $start = $faker->dateTime;
    
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'price' => $faker->randomNumber(2) . $faker->currencyCode,
        'location' => $faker->address,
        'description' => $faker->text,
        'start' => $start,
        'end' => $faker->dateTimeBetween($start),
        'eventType' => $faker->randomElement(App\Domain\Event\Event::$types)
    ];
});