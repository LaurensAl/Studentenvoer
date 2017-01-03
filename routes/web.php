<?php

// Trashpile (old,unusable) -- Laurens
//Route::get('/', 'PagesController@home')->middleware('auth');
//Route::get('/home', 'HomeController@index');
//Route::get('/', 'RecipesController@home');
//Route::post('upload', 'ImagesController@store');

//Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout'); // Logout function
Route::get('about', 'PagesController@about'); // about me menu
Route::get('contact', 'PagesController@contact'); // contact form // !Geen mailserver Con.!

Route::get('/', ['as' => 'index', 'uses' => 'RecipesController@index']); // Homemenu

Route::get('addblog', 'RecipesController@addblog')->middleware('auth'); // add recipe -> menu
Route::post('/addblog', 'RecipesController@updateblog')->middleware('auth'); //add recipe to DB

Route::get('viewblog/editblog/{post}', 'RecipesController@editblog')->middleware('auth'); // edit recipe menu
Route::post('/viewblog/editblog', 'RecipesController@editblogupdate')->middleware('auth'); // update existing recipe

Route::get('viewblog/{post}', 'RecipesController@viewblog')->name('view.blog'); // view recipe

Route::post('/destroy', 'RecipesController@destroy')->middleware('auth'); // delete recipe

Route::post('/comments', 'CommentController@store'); // add comments to DB

