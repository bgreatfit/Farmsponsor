<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Registerlog::class, function (Faker $faker) {
    return [
        'ip_address' => $faker->ipv4,
    ];
});
