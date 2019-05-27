<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vestbank::class, function (Faker $faker) {
    return [
        'balance' => $faker->numberBetween(300000, 1000000)
    ];
});
