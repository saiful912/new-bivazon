<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Slider::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'image' => $faker->imageUrl(),
        'button_text' => $faker->title,
        'button_link' => $faker->url,
        'extra' => $faker->title,
        'priority' => 1,
        'status' => 1,
    ];
});
