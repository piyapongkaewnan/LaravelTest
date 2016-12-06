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

// Route::get('/article', 'ArticleController@index')->name('article');
// Route::get('/article/page/{id?}', 'ArticleController@index');
// Route::get('/article/create', 'ArticleController@create');
// Route::post('/article', 'ArticleController@store');
// Route::get('/article/{id}', 'ArticleController@show');
// Route::get('/article/{id}/edit', 'ArticleController@edit');

Route::group(['prefix' => 'article'], function () {
    Route::get('/', 'ArticleController@index');  // retrieve
    Route::get('/article/page/{id?}', 'ArticleController@index');//page
    Route::get('/create', 'ArticleController@create'); // Create
    Route::post('/', 'ArticleController@store'); // Insert
    Route::get('/{id}', 'ArticleController@show'); //retrieve
    Route::get('/{id}/edit', 'ArticleController@edit'); //edit
    Route::put('/{id}', 'ArticleController@update'); //update
    Route::delete('/{id}', 'ArticleController@detroy'); //detroy
});
