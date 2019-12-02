<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\TicketClass::class, function (Faker $faker) {
    $totalTicket = $faker->randomNumber();
    return [
        'type' => $faker->word,
        'price' => $faker->randomNumber(),
        'numberAvailable' => $totalTicket,
        'total' => $totalTicket,
    ];
});
