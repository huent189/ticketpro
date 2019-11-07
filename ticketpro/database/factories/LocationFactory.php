<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
        'place' => $faker->word,
        'city' => $faker->city,
        'fullAddress' => $faker->address,
    ];
});
