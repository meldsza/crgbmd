<?php

namespace App\Observers;

use App\events;
use Cache;

class EventObserver
{
    /**
     * Handle the events "created" event.
     *
     * @param  \App\events  $events
     * @return void
     */
    public function created(events $eventS)
    {
        Cache::rememberForever('event_count', function () {
            return events::count();
        });
        Cache::rememberForever('events', function () {
            return events::limit(3)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the events "updated" event.
     *
     * @param  \App\events  $events
     * @return void
     */
    public function updated(events $events)
    {
        Cache::rememberForever('events', function () {
            return events::limit(3)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the events "deleted" event.
     *
     * @param  \App\events  $events
     * @return void
     */
    public function deleted(events $events)
    {
        //
    }

    /**
     * Handle the events "restored" event.
     *
     * @param  \App\events  $events
     * @return void
     */
    public function restored(events $events)
    {
        //
    }

    /**
     * Handle the events "force deleted" event.
     *
     * @param  \App\events  $events
     * @return void
     */
    public function forceDeleted(events $events)
    {
        //
    }
}