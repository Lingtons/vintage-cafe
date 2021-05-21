<?php

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

//Route::get('/', function () {
//    return view('events.home');
//});
Route::get('/', 'EventController@home')->name('index');
Route::get('/about', 'EventController@about')->name('about');
Route::get('/speakers', 'EventController@speakers')->name('speakers');
Route::get('/schedule', 'EventController@schedule')->name('schedule');
Route::get('/pricing', 'EventController@pricing')->name('pricing');
Route::get('/blog', 'EventController@blog')->name('blog');
Route::get('/contact', 'EventController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

