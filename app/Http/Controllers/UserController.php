<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\members;
use App\team;
use App\events;

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
        //\Log::debug($events);
        return view('uhome')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3, 'events' => $events]);
    }
}