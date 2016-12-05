<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','ArticleController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/article', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article', 'ArticleController@store');
Route::get('/article/{id}', 'ArticleController@show');
