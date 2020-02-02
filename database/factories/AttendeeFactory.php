<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendee;
use Faker\Generator as Faker;

$factory->define(Attendee::class, function (Faker $faker) {
    return [
        //
        'ticketCode'=>Str::random(6),
        'firstName'=>$faker->$faker->title($gender = null|'male'|'female'),
        'lastName'=>$faker->name ,
        'email'=>$faker->safeEmail,
        'pdfTiketPath'=>'/uploads/avata/avata.jpg',

    ];
});