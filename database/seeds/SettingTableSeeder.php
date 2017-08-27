<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => "Seri Kembangan",
            'contact_number' => '01293213111',
            'contact_email' => 'admin.haziq@neophia.com'
        ]);
    }
}
