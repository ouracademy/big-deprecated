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

/*
TODO: implement Entity for User...Doctrine
$factory->define(App\User::class, function (Faker\Generator $faker) {
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
    $end = $faker->dateTimeBetween($start);
    $sol = App\Domain\Money\Currencies::SOL();
    
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'price' => new App\Domain\Money\Money($faker->randomNumber(2), $sol),
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

/*$factory->define(App\Domain\Party\Party::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'location' => $faker->address
    ];
});

$factory->defineAs(App\Domain\Party\Party::class, 'organization',  function ($faker) use ($factory) {
    $user = $factory->raw(App\Party::class);
    return array_merge($user, ['type' => 'organization']);
});

$factory->defineAs(App\Domain\Party\Party::class, 'person',  function ($faker) use ($factory) {
    $user = $factory->raw(App\Party::class);
    return array_merge($user, ['type' => 'person']);
});
*/
