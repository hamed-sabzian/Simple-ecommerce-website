<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OptionType;
use Faker\Generator as Faker;

$factory->define(OptionType::class, function (Faker $faker) {
    return [
        'name'  => 'color',
    ];
});
