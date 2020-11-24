<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resta;
use Illuminate\Support\Carbon;
use Faker\Generator as Faker;

$factory->define(Resta::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        'name' => $faker->foodName(),
        'type' => 'Foods',
        'price' => rand(1, 75) * 1000,
        'stock' => rand(10, 100),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
