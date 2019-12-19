<?php

namespace App\Listeners;

use App\Events\OrderCompletedEvent;
use App\Jobs\GenerateTicket;
use App\Jobs\SendTickets;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderCompletedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderCompletedEvent  $event
     * @return void
     */
    public function handle(OrderCompletedEvent $event)
    {
        SendTickets::dispatch($event->booking);
    }
}
