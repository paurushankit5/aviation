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

Route::get('/', function () {
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/success', function () {
    return view('success');
});
Route::post('/contact', 'HomeController@contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
