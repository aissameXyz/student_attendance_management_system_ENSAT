<?php

namespace App\Listeners;

use App\Events\SeanceStartingEvent;
use App\Notifications\SeanceStartNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SeanceStartingEven
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
     * @param  \App\Events\SeanceStartingEvent  $event
     * @return void
     */
    public function handle(SeanceStartingEvent $event)
    {
        $students = $event->teacher->module->filiere->student;
        Notification::send($students, new SeanceStartNotification($event->teacher,$event->seance));
    }
}
