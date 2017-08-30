<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class LockSundayEarlyGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LockSundayEarlyGames:locksunearly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lock Down all Sunday Early Games';

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
        DB::table('user_picks')->delete();
    }
}
