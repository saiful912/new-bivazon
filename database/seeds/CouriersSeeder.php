<?php

use Illuminate\Database\Seeder;

class CouriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Courier::class, 10)->create();
    }
}
