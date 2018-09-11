<?php

use Illuminate\Database\Seeder;

class UserTableDummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Test1',
            'email' => 'test1@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Test1',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 0,
            'total_paid' =>'0'
        ]);
        App\User::create([
            'name' => 'Test2',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Test2',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 0,
            'total_paid' =>'0'
        ]);
        App\User::create([
            'name' => 'Test5',
            'email' => 'test5@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Test5',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 0,
            'total_paid' =>'0'
        ]);
        App\User::create([
            'name' => 'Test3',
            'email' => 'test3@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Test3',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 0,
            'total_paid' =>'0'
        ]);
        App\User::create([
            'name' => 'Test4',
            'email' => 'test4@gmail.com',
            'password' => bcrypt('Pa$sw0rd'),
            'team_name' => 'Test4',
            'phone' => '(518) 796-8987',
            'options' => 'f',
            'admin' => 0,
            'total_paid' =>'0'
        ]);
    }
}
