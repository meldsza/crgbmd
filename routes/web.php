<?php

use App\news;
use App\events;
use App\Http\Controllers\admincontroller;
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

Route::get('/admin', function () {
    return redirect('/dashboard');
});
Route::get('/dashboard', function () {
    $cnt = members::count();
    $cnt2 = team::count();
    $cnt3 = events::count();
    return view('admindashboard')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3]);
})->middleware('auth');
Route::get('/addevents', function () {
    return view('addevents');
})->middleware('auth');
Route::get('/adminnews', function () {
    return view('addnews1');
})->middleware('auth');
Route::get('/member_registration', function () {
    return view('registermember');
});
Route::get('/addteam', function () {
    return view('addteam');
})->middleware('auth');
Route::get('/team', 'admincontroller@displayteam')->middleware('auth');
Route::get('/members', 'admincontroller@displaymembers')->middleware('auth');
Route::get('/managenews', 'admincontroller@displaynews')->middleware('auth');
Route::get('/manageevents', 'admincontroller@displayevents')->middleware('auth');
Route::post('/addnewss', 'admincontroller@news')->middleware('auth');
Route::post('/addeventss', 'admincontroller@events')->middleware('auth');
Route::post('/addmember', 'admincontroller@member');
Route::post('/addteams', 'admincontroller@team')->middleware('auth');
Route::get('delete/{id}', 'admincontroller@delete')->middleware('auth');
Route::get('/deletegalleryimage/{id}', 'admincontroller@deletegalleryimage')->middleware('auth');
Route::get('deletenews/{id}', 'admincontroller@deletenews')->middleware('auth');
Route::get('deleteevents/{id}', 'admincontroller@deleteevents')->middleware('auth');



Route::get('/', function () {
    return redirect('/userhome');
});
Route::get('/addgallery', 'admincontroller@addgallery');
Route::post('/addgallerys', 'admincontroller@postaddgallery');
Route::get('/userhome', 'UserController@home');
Route::get('/userservices', function () {
    return view('uservices');
});
Route::get('/displaygallery', 'admincontroller@displaygallery');
Route::get('/usergallery', 'UserController@gallery');
Route::get('/userabout', function () {
    $sc = team::where('committe', '=', 'scientific');
    $ad = team::where('committe', '=', 'advisory');
    $mg = team::where('committe', '=', 'managing');
    return view('uabout')->with(['sc' => $sc, 'ad' => $ad, 'mg' => $mg]);
});
Route::get('/userpartners', function () {
    return view('upartners');
});
Route::get('/userevents', function () {
    return view('uevents');
});
Route::get('/userresources', function () {
    return view('uresources');
});
Route::get('/contact', 'UserController@contact');

Route::get('/userrgd', function () {
    return view('urgd');
});


Auth::routes(['verify' => false, 'register' => false]);
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/home', 'HomeController@index')->name('home');