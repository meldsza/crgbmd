<?php

namespace App\Observers;

use App\members;
use Cache;

class MemberObserver
{
    /**
     * Handle the members "created" event.
     *
     * @param  \App\members  $members
     * @return void
     */
    public function created(members $members)
    {
        Cache::rememberForever('member_count', function () {
            return member::count();
        });
    }

    /**
     * Handle the members "updated" event.
     *
     * @param  \App\members  $members
     * @return void
     */
    public function updated(members $members)
    {
        //
    }

    /**
     * Handle the members "deleted" event.
     *
     * @param  \App\members  $members
     * @return void
     */
    public function deleted(members $members)
    {
        //
    }

    /**
     * Handle the members "restored" event.
     *
     * @param  \App\members  $members
     * @return void
     */
    public function restored(members $members)
    {
        //
    }

    /**
     * Handle the members "force deleted" event.
     *
     * @param  \App\members  $members
     * @return void
     */
    public function forceDeleted(members $members)
    {
        //
    }
}