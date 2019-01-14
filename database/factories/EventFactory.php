<?php

declare(strict_types=1);

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(App\Event::class, static function (Faker $faker) {
    return [
        'name' => 'Laravel and Pancakes',
        'start_at' => '2019-01-13 12:30:00',
        'venue' => 'Pancake Town',
        'city' => 'Barcelona',
        'published' => 1,
        'description' => 'Gonna eat pancakes and learn Laravel!',
    ];
});

$factory->state(
    App\Event::class,
    'incorrect_capitalization',
    ['name' => 'hacking At IOT with raspberry Pi']
);
