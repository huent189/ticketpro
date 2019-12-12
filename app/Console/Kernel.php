<?php

namespace App\Console;

use App\Enums\EventStatus;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function(){
            DB::table('events')->whereRaw('now() > startSellingTime and now() < endSellingTime')
                               ->update(['status' => EventStatus::OnSelling]);
            DB::table('events')->whereRaw('now() < startTime and now() > endSellingTime')
                               ->update(['status' => EventStatus::EndSelling]);
            DB::table('events')->whereRaw('now() > startTime and now() < endTime')
                               ->update(['status' => EventStatus::Ongoing]);
            DB::table('events')->whereRaw('now() > endTime')
                               ->update(['status' => EventStatus::Ended]);
        })->daily();
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
