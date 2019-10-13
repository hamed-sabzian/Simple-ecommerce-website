<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OptionValue;
use App\Models\OptionType;
use Faker\Generator as Faker;

$factory->define(OptionValue::class, function (Faker $faker) {
    return [
        'name'  => $faker->word,
        'option_type_id'  => factory(OptionType::class)->create()->id,
    ];
});
