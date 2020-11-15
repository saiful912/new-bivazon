<?php

use Illuminate\Database\Seeder;

class MarchantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Merchant::class, 10)->create();
    }
}
