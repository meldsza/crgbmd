<?php

namespace App\Observers;

use App\gallery;
use Cache;

class GalleryObserver
{
    /**
     * Handle the gallery "created" event.
     *
     * @param  \App\gallery  $gallery
     * @return void
     */
    public function created(gallery $gallery)
    {
        Cache::rememberForever('gallery', function () {
            return events::limit(8)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the gallery "updated" event.
     *
     * @param  \App\gallery  $gallery
     * @return void
     */
    public function updated(gallery $gallery)
    {
        Cache::rememberForever('gallery', function () {
            return events::limit(8)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the gallery "deleted" event.
     *
     * @param  \App\gallery  $gallery
     * @return void
     */
    public function deleted(gallery $gallery)
    {
        //
    }

    /**
     * Handle the gallery "restored" event.
     *
     * @param  \App\gallery  $gallery
     * @return void
     */
    public function restored(gallery $gallery)
    {
        //
    }

    /**
     * Handle the gallery "force deleted" event.
     *
     * @param  \App\gallery  $gallery
     * @return void
     */
    public function forceDeleted(gallery $gallery)
    {
        //
    }
}