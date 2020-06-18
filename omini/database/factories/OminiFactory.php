<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'address' => $faker -> address(),
        'code' => $faker -> postcode(),
        'state' => $faker -> state(),
        'phoneNumber' => $faker -> phoneNumber(),
        'role' => $faker -> jobTitle()
    ];
});
