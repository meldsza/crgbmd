<?php

namespace App\Observers;

use App\news;
use Cache;

class NewsObserver
{
    /**
     * Handle the news "created" event.
     *
     * @param  \App\news  $news
     * @return void
     */
    public function created(news $news)
    {
        Cache::rememberForever('news', function () {
            return news::limit(5)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the news "updated" event.
     *
     * @param  \App\news  $news
     * @return void
     */
    public function updated(news $news)
    {
        Cache::rememberForever('news', function () {
            return news::limit(5)->orderBy('created_at', 'desc')->get();
        });
    }

    /**
     * Handle the news "deleted" event.
     *
     * @param  \App\news  $news
     * @return void
     */
    public function deleted(news $news)
    {
        //
    }

    /**
     * Handle the news "restored" event.
     *
     * @param  \App\news  $news
     * @return void
     */
    public function restored(news $news)
    {
        //
    }

    /**
     * Handle the news "force deleted" event.
     *
     * @param  \App\news  $news
     * @return void
     */
    public function forceDeleted(news $news)
    {
        //
    }
}