<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddEvent;
use App\Http\Requests\addnews;
use App\news;
use App\events;

class admincontroller extends Controller
{
    public function news(addnews $req)
    {



        $rep = news::create($req->validated());
        return redirect('/dashboard');
    }
    public function events(AddEvent $req)
    {
        $rep = events::create($req->validated());
        return redirect('/dashboard');
    }
}