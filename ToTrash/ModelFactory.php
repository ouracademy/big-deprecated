$factory->define(App\Event::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    $start = $faker->dateTime;
    
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'price_amount' => $faker->randomNumber(2),
        'price_currency' => $faker->currencyCode,
        'location' => $faker->address,
        'description' => $faker->text,
        'start' => $start,
        'end' => $faker->dateTimeBetween($start),
        'type' => $faker->randomElement(App\Domain\Event\Event::$types)
    ];
});

<?php
$factory->define(App\Party::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'location' => $faker->address
    ];
});

$factory->defineAs(App\Party::class, 'organization',  function ($faker) use ($factory) {
    $user = $factory->raw(App\Party::class);
    return array_merge($user, ['type' => 'organization']);
});

$factory->defineAs(App\Party::class, 'person',  function ($faker) use ($factory) {
    $user = $factory->raw(App\Party::class);
    return array_merge($user, ['type' => 'person']);
});

$factory->define(App\Organization::class, function (Faker\Generator $faker) {
    return [];
});