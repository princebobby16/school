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

Route::get('/', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/submit', 'ContactController@store');

Route::get('/about', function() {
    return view('about');
});
Route::get('/event', function() {
    return view('event');
});
Route::get('/gallery', function() {
    return view('gallery');
});

