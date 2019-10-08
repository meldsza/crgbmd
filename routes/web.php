<?php
use App\news;
use App\events;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',function(){
    return view('admindashboard');
});
Route::get('/addevents',function(){
    return view('addevents');
});
Route::get('/adminnews',function(){
    return view('addnews1');
});
Route::post('/addnewss','admincontroller@news');
Route::post('/addeventss','admincontroller@events');

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