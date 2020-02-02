<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\TicketClass::class, function (Faker $faker) {
    $totalTicket = $faker->randomNumber();
    return [
        'type' => $faker->word,
        'price' => rand(20000,2000000),
        'numberAvailable' => $totalTicket,
        'total' => $totalTicket,
        'location'=>$faker->name,
        'benefit'=>$faker->name,
    ];
});
