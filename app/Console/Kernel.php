<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    
    protected $commands = [
        '\App\Console\Commands\LockSundayEarlyGames',
        '\App\Console\Commands\LockMondayNightGames',
        '\App\Console\Commands\LockSundayLateGames',
        '\App\Console\Commands\LockSundayMorningGames',
        '\App\Console\Commands\LockSundayNightGames',
        '\App\Console\Commands\PaymentReminder',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('LockSaturdayNightGames:locksatnight')
            ->saturdays()->at('20:20')->timezone('America/New_York');
        $schedule->command('LockSaturdayLateGames:locksatlate')
            ->saturdays()->at('16:30')->timezone('America/New_York');
        $schedule->command('LockSundayEarlyGames:locksunearly')
            ->sundays()->at('15:05')->timezone('America/New_York');

        $schedule->command('LockMondayNightGames:lockmonnight')
            ->mondays()->at('20:15')->timezone('America/New_York');

        $schedule->command('LockSundayLateGames:locksunlate')
            ->sundays()->at('18:40')->timezone('America/New_York');

        $schedule->command('LockSundayMorningGames:locksunmorning')
            ->sundays()->at('09:30')->timezone('America/New_York');

        $schedule->command('LockSundayNightGames:locksunnight')
            ->sundays()->at('20:20')->timezone('America/New_York');
        // $schedule->command('PaymentReminder:sendreminder')
        //   ->tuesdays()->at('06:00')->timezone('America/New_York');
        //
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
