<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'invoice_no' => $faker->randomNumber(),
        'user_id' => random_int(1,9),
        'email' => $faker->email,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'district_id' => random_int(1,9),
        'courier_id' => random_int(1,9),
        'payment_method' => 'cash',
        'courier_at' => \Carbon\Carbon::now(),
        'delivery_at' => \Carbon\Carbon::now(),
        'status' => 'failed',
        'type' => 'retail',
        'total_amount' => 1000,
        'advance_amount' => 800,
        'delivery_charge_outside_dhaka' => 100,
        'delivery_charge_inside_dhaka' => 60,
        'total_discount' => 10,
        'note' => $faker->realText(),
    ];
});
