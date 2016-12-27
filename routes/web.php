<?php

//Route::get('/', 'PagesController@home')->middleware('auth');
//Route::get('/home', 'HomeController@index');
//Route::get('/', 'RecipesController@home');
//Route::post('upload', 'ImagesController@store');


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'RecipesController@index');
Route::get('addblog', 'RecipesController@addblog')->middleware('auth');

