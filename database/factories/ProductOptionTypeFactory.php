<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'  => $faker->word,
        'option_type_id'  => factory(OptionType::class)->create()->id,
    ];
});
