<?php

//Route::get('/', 'PagesController@home')->middleware('auth');
//Route::get('/home', 'HomeController@index');
//Route::get('/', 'RecipesController@home');
//Route::post('upload', 'ImagesController@store');


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', 'Auth\LoginController@logout'); // Logout function
Route::get('about', 'PagesController@about'); // about me menu
Route::get('contact', 'PagesController@contact'); // contact form

Route::get('/', 'RecipesController@index'); // Homemenu

Route::get('addblog', 'RecipesController@addblog')->middleware('auth'); // add recipe -> menu
Route::post('/addblog', 'RecipesController@updateblog')->middleware('auth'); //add recipe to DB

Route::get('viewblog/editblog/{post}', 'RecipesController@editblog')->middleware('auth'); // edit recipe menu
//Route::post('viewblog/editblog/{post}', 'RecipesController@editblogupdate')->middleware('auth'); // update existing recipe

Route::get('viewblog/{post}', 'RecipesController@viewblog'); // view recipe

Route::post('Delete', 'RecipesController@destroy')->middleware('auth'); // delete recipe

