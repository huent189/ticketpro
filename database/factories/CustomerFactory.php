<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name(),
        'phoneNumber' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
    ];
});
