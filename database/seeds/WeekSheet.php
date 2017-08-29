<?php

use Illuminate\Database\Seeder;

class WeekSheet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('week_sheet_createds')->insert([
            'week_number' => '1',

        ]);
    }
}
