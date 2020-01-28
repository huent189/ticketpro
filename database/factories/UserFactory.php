<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $provider=['google','facebook'];
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'avata'=>'/uploads/avata/avata.jpg',
        'provider'=>array_rand($provider),
        'providerId'=>$faker->uuid,
        'password'=>bcrypt(12345678),
        'remember_token'=>$faker->uuid,
        //
    ];
});
