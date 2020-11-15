<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => random_int(1,9),
        'product_id' => random_int(1,9),
        'quantity' => 10,
        'line_total' => 10,
        'unit_discount' => 10,
        'unit_price' => 1000,
        'attribute' => 'color',
    ];
});
