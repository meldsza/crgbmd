<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\members;
use App\team;
use App\events;
use App\gallery;
use App\news;

class UserController extends Controller
{

    public function home()
    {
        $cnt3 = Cache::get('event_count', function () {
            return events::count();
        });
        $cnt2 = Cache::get('team_count', function () {
            return team::count();
        });
        $cnt = Cache::get('member_count', function () {
            return members::count();
        });

        $events = Cache::get('events', function () {
            return events::limit(3)->orderBy('created_at', 'desc')->get();
        });
        $gallery = Cache::get('gallery', function () {
            return gallery::limit(8)->orderBy('created_at', 'desc')->get();
        });
        $news = Cache::get('news', function () {
            return news::limit(5)->orderBy('created_at', 'desc')->get();
        });
        //\Log::debug($news);
        return view('uhome')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3, 'events' => $events, 'gallery' => $gallery, 'news' => $news]);
    }
    public function gallery()
    {
        $gallery = Cache::get('gallery', function () {
            return gallery::get();
        });
        return view('ugallery')->with(['gallery' => $gallery]);
    }
    public function contact()
    {
        return view('ucontact');
    }
}