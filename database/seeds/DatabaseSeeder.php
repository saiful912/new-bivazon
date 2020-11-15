<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
//        $this->call(CategorySeeder::class);
        $this->call(SettingSeeder::class);
//        $this->call(SliderSeeder::class);
//        $this->call(MarchantsSeeder::class);
//          $this->call(OrderSeeder::class);
//        $this->call(OrderItemSeeder::class);
//        $this->call(DistrictSeeder::class);
//        $this->call(CouriersSeeder::class);
//        $this->call(PaymentSeeder::class);
    }
}
