<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LockSaturdayNightGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LockSaturdayNightGames:locksatnight\'';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lock Down all Saturday Night Games';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        DB::table('user_picks')->where('game_time','saturday_early' )->update(['locked'=>'1']);
        DB::table('master_games')->where('game_time','saturday_early' )->update(['locked'=>'1']);
    }
}
