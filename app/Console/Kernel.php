<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SetEmpdata;
use App\Console\Commands\getEmpdata;
use App\Console\Commands\unsetEmpdata;

use App\Console\Commands\setEmpwebHistory;
use App\Console\Commands\getEmpwebHistory;
use App\Console\Commands\unsetEmpwebHistory;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected $commands = [ SetEmpdata::class, 
                            getEmpdata::class, 
                            unsetEmpdata::class,
                            setEmpwebHistory::class,
                            getEmpwebHistory::class,
                            unsetEmpwebHistory::class,
                        ];
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
