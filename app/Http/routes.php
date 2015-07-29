<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@getAllPosts');

Route::get('ola/{nome}', 'TesteController@index');
Route::get('notas', 'TesteController@notas');

// Blog
Route::get('posts', 'PostController@getAllPosts');
Route::get('post/{id}', 'PostController@getPost');