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
Route::get('/', 'PagesController@home')->middleware('auth');

Route::get('/home', 'HomeController@index')->middleware('auth');
//Route::post('upload', 'ImagesController@store');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/blog', 'BlogController@index');

Route::post('banner','BlogController@update');

