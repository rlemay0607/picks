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
       $user =  App\User::create([
           'name' => 'Ryan LeMay',
            'email' => 'lemay.ryan@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Team Lemay',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 1,
           'total_paid' =>'0'
        ]);

       App\Profile::create([
          'user_id' => $user->id,
           'about' => 'ServiceNow Developer for the past 6 years',
           'avatar' => 'uploads/avatars/rlemay.jpeg',
           'facebook' => 'facebook.com',
           'youtube' => 'youtube.com'
       ]);
    }
}
