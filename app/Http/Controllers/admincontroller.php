<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddEvent;
use App\Http\Requests\addnews;
use App\Http\Requests\addmember;
use App\Http\Requests\AddGallery;
use App\Http\Requests\addteam;
use App\news;
use App\events;
use App\members;
use App\team;
use App\gallery;


class admincontroller extends Controller
{
    public function news(addnews $req)
    {

        $rep = news::create($req->validated());
        return redirect('/dashboard');
    }

    public function events(AddEvent $req)
    {
        $data = $req->validated();
        $data['eventimage'] = substr($req->file('eventimage')->store('public'), 7);
        $rep = events::create($data);

        return redirect('/dashboard');
    }

    public function member(addmember $req)
    {
        $rep = members::create($req->validated());

        return redirect('/userhome');
    }

    public function displaymembers()
    {
        $res = members::all();
        return view('adminmembers', compact('res'));
    }

    public function team(addteam $req)
    {
        $data = $req->validated();
        $data['photo'] = substr($req->file('photo')->store('public'), 7);
        $rep = team::create($data);
        return redirect('/dashboard');
    }
    public function addgallery()
    {
        return view('adminAddGallery');
    }
    public function postaddgallery(AddGallery $req)
    {
        $data = $req->validated();
        $data['galleryimage'] = substr($req->file('galleryimage')->store('public'), 7);
        $rep = gallery::create($data);
        return redirect('/dashboard');
    }
    public function displayteam()
    {
        $res = team::all();
        return view('team', compact('res'));
    }
    public function displaygallery()
    {
        $res = gallery::all();
        return view('managegallery', compact('res'));
    }

    public function displaynews()
    {
        $res = news::all();
        return view('managenews', compact('res'));
    }

    public function displayevents()
    {
        $res = events::all();
        return view('manageevents', compact('res'));
    }

    public function delete($id, Request $request)
    {
        $x = team::findOrFail($id);
        // if ($x->image!=null) {
        //     unlink(public_path().'/uploads/images/'.$x->image);
        // }
        $delete = team::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Task was successful!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'Task was unsuccessful!');
        }
        return view('team');
    }
    public function deletenews($id, Request $request)
    {
        $x = news::findOrFail($id);
        // if ($x->image!=null) {
        //     unlink(public_path().'/uploads/images/'.$x->image);
        // }
        $delete = news::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Task was successful!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'Task was unsuccessful!');
        }
        return view('managenews');
    }
    public function deleteevents($id, Request $request)
    {
        $x = events::findOrFail($id);
        $delete = events::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Task was successful!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'Task was unsuccessful!');
        }
        return view('manageevents');
    }
    public function deletegalleryimage($id, Request $request)
    {
        $x = gallery::findOrFail($id);
        $delete = events::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Task was successful!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'Task was unsuccessful!');
        }
        return view('managegallery');
    }
}