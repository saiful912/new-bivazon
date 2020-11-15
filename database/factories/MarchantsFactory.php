<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\ShopType;
use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Merchant::class, function (Faker $faker) {
    return [
        'shop_name' => $faker->name,
        'shop_type' => $faker->randomElement([ShopType::RETAIL(), ShopType::WHOLESALE()]),
        'shop_banner' => $faker->imageUrl(),
        'category_id' => random_int(1, 9),
        'current_balance' => 10000,
        'city' => 'dhaka',
        'commission' => 100,
        'address' => $faker->address,
        'extra' => $faker->realText(),
    ];
});
