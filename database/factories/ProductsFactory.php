<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => mt_rand (0, 100 * 100) / 100,
        //'created_at' => $faker->dateTimeThisCentury(),
    ];
});
