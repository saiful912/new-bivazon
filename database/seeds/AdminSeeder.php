<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'phone' => '01770146189',
        ]);
    }
}
