<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/show', function () {
//     return view('home');
// });
//For Home =>Root
Route::get('/','CreatesController@home');
//For Create =>Root
Route::get('/create', function () {
    return view('create');
});
//Insertion
Route::post('/create','CreatesController@index')->name('create');
//Edit route
Route::get('/edit/{id}/','CreatesController@edit')->name('edit');
//Update route
Route::post('/update/{id}/','CreatesController@update')->name('update');
//Delete route
Route::get('/delete/{id}/','CreatesController@destroy')->name('delete');
//Read route
Route::get('/read/{id}/','CreatesController@show')->name('read');


