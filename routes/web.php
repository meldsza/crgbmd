<?php

use App\news;
use App\events;
use App\members;
use App\team;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard',function(){
    $cnt = members::count();
    $cnt2 = team::count();
    $cnt3 = events::count();
    return view('admindashboard')->with(['total'=>$cnt,'teamno'=>$cnt2,'eventno'=>$cnt3]);
})->middleware('auth');
Route::get('/addevents',function(){
    return view('addevents');
});
Route::get('/adminnews',function(){
    return view('addnews1');
});
Route::get('/member_registration',function(){
    return view('registermember');
});
Route::get('/addteam',function(){
    return view('addteam');
});
Route::get('/team','admincontroller@displayteam');
Route::get('/members','admincontroller@displaymembers');
Route::get('/managenews','admincontroller@displaynews');
Route::get('/manageevents','admincontroller@displayevents');
Route::post('/addnewss','admincontroller@news');
Route::post('/addeventss','admincontroller@events');
Route::post('/addmember','admincontroller@member');
Route::post('/addteams','admincontroller@team');
Route::get('delete/{id}','admincontroller@delete');
Route::get('deletenews/{id}','admincontroller@deletenews');
Route::get('deleteevents/{id}','admincontroller@deleteevents');



Route::get('/userhome',function(){
    return view('uhome');
});
Route::get('/userservices',function(){
    return view('uservices');
});
Route::get('/userabout',function(){
     return view('uabout');
});
Route::get('/userpartners',function(){
    return view('upartners');
});
Route::get('/userevents',function(){
    return view('uevents');
});
Route::get('/userresources',function(){
    return view('uresources');
});

Route::get('/userrgd',function(){
    return view('urgd');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');