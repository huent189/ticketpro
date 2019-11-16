<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Enums\EventStatus;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    $startSellingTime = $faker->dateTimeBetween('-30 days', 'now');
    $endSellingTime = $faker->dateTimeBetween($startSellingTime->format('Y-m-d H:i:s').' +7 days', $startSellingTime->format('Y-m-d H:i:s').' +21 days');
    $startTime = $faker->dateTimeBetween($endSellingTime->format('Y-m-d H:i:s'), $endSellingTime->format('Y-m-d H:i:s').' +1 days');
    return [
        'name' => $faker->sentence,
        'startTime' => $startTime,
        'categoryId' => App\Category::all()->random()->id,
        'endTime' => $faker->dateTimeBetween($startTime->format('Y-m-d H:i:s').' +1 hours', $startTime->format('Y-m-d H:i:s').' +5 hours'),
        'description' => $faker->paragraph,
        'image' => $faker->word,
        'startSellingTime' => $startSellingTime,
        'endSellingTime' => $endSellingTime,
        'status' => EventStatus::Draft,
    ];
});
