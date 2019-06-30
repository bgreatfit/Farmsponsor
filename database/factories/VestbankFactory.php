<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vestbank::class, function (Faker $faker) {
    return [
        'capital' => $faker->numberBetween(300000, 1000000),
        'interest' => $faker->numberBetween(30000, 100000)
    ];
});
