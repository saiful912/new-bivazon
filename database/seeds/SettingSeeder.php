<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'logo' => 'default.png',
            'mobile_logo' => '',
            'app_name' => 'Bivazon.com',
            'copyright' => 'Bivazon.com',
            'terms_and_condition' => 'Bivazon.com',
            'address' => 'Chokbazar',
            'google_map_url' => '',
            'favicon' => '',
            'delivery_charge_dhaka' => 60,
            'delivery_charge_dhaka_outside' => 60,
            'email' => 'bivazon@gmail.com',
            'lang' => 'en',
            'facebook_url' => '',
            'instagram_url' => '',
            'is_maintained' => '',
            'invoice_date_format' => 'Y-M-D',
            'currency' => '৳',
            'money_format' => '00',
            'timezone' => 'Asia/Dhaka',
            'is_database_backup' => '',
            'bkash' => '000',
            'nagod' => '000',
            'rocket' => '',
            'min_wholesale_order_limit' => 2000,
            'min_retail_order_limit' => 2000,
            'affiliate_registration' => true,
        ];
        info('Setting seed running...');
        foreach ($settings as $key => $value) {
            Setting::create([
                'key' => $key,
                'value' => $value,
            ]);
        }
    }
}
