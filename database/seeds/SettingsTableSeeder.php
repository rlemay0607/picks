<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name' => "NFL Weekly Picks",
            'address' => 'Waterford, NY',
            'contact_number' => '(555) 555-5555',
            'contact_email' => 'info@company.com'
        ]);
    }
}
