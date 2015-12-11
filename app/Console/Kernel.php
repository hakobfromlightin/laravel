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
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->exec('');
//        $schedule->command('laracasts:clear-history')->monthly()->sendOutputTo('path/to/file')->emailOutputTo('admin@admin.com')->thenPing('google.com');
//        $schedule->command('laracasts:daily-report')->dailyAt('23:55');
    }
}
