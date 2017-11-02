<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\User::create([
           'name' => 'Ryan LeMay',
            'email' => 'lemay.ryan@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Team Lemay',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 1,
           'total_paid' =>'0'
        ]);



    }
}
