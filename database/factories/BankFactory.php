<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Bank::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('de_DE');
    return [
        'name' => $faker->bank,
        'account_number' => $faker->bankAccountNumber,
        'last_update' => $faker->dateTime,
    ];
});
