<?php

namespace App\Console;

use App\Http\Controllers\DraginoSensorController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $PullDataTemperature = new DraginoSensorController();
            $PullDataTemperature->AirTemperaturePull();
        })->everyThreeMinutes();        
        
        $schedule->call(function () {
            $PullDataTemperature = new DraginoSensorController();
            $PullDataTemperature->AirHumidityPull();
        })->everyThreeMinutes();

        
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
