<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Payment::class, function (Faker $faker) {
    return [
        'order_id' => random_int(1, 9),
        'amount' => 1000,
        'merchant_id' => random_int(1, 9),
        'payment_method' => 'bkash',
        'number' => \Illuminate\Support\Str::random(20)
    ];
});
