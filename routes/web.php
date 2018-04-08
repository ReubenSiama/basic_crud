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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add','HomeController@add');
Route::post('/addPost','PostController@create');
Route::get('/delete/{id}','PostController@destroy');
Route::get('/edit/{id}','PostController@edit');
Route::post('/updatePost/{id}','PostController@update');