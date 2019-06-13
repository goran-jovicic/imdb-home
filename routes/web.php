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
    return view('welcome');
});

Route::get('/movies', 'MoviesController@index');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/create', 'MoviesController@create');

Route::get('/genres/{genre}', 'GenresController@show');

Route::post('/create', 'MoviesController@store');

Route::post('/movies/{movieId}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);
