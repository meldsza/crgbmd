<?php

namespace App\Observers;

use App\team;
use Cache;

class TeamObserver
{
    /**
     * Handle the team "created" event.
    
     * @param  \App\team  $team
     * @return void
     */
    public function created(team $team)
    {
        Cache::rememberForever('team_count', function () {
            return team::count();
        });
    }

    /**
     * Handle the team "updated" event.
     *
     * @param  \App\team  $team
     * @return void
     */
    public function updated(team $team)
    {
        //
    }

    /**
     * Handle the team "deleted" event.
     *
     * @param  \App\team  $team
     * @return void
     */
    public function deleted(team $team)
    {
        //
    }

    /**
     * Handle the team "restored" event.
     *
     * @param  \App\team  $team
     * @return void
     */
    public function restored(team $team)
    {
        //
    }

    /**
     * Handle the team "force deleted" event.
     *
     * @param  \App\team  $team
     * @return void
     */
    public function forceDeleted(team $team)
    {
        //
    }
}