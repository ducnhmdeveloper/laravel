<?php

namespace App\Listeners;

use App\Events\EventTest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Activities;

class EventListenerTest
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  EventTest  $event
     * @return void
     */
    public function handle(EventTest $event)
    {
        return Activities::create(['activity' => $event->activity]);
    }
}
