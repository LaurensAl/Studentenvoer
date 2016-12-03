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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('/', 'PagesController@home');
Route::get('/home', 'HomeController@index');
//Route::post('upload', 'ImagesController@store');

Route::post('banner', function() {

    request()->file('banner')->store('images');

    return back()->with('status', 'Your image has been uploaded successfully!');

});

