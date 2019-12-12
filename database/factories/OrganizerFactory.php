<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Organizer::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'profileImage' => $faker->word,
        'website' => $faker->domainName,
        'phone' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
        'description' => $faker->jobTitle,
        'bankAccountNumber'=>$faker->bankAccountNumber,
        'bankAccountName'=>$faker->name,
    ];
});
