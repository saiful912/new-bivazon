<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Courier::class, function (Faker $faker) {
    return [
        'district_id' => factory(\App\Models\District::class)->create()->id,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'parent_id' => factory(\App\Models\District::class)->create()->id,
    ];
});
