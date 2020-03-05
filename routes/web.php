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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'index')->name('index');
Route::view('/arbol', 'arbol')->name('arbol');
Route::view('/contactame', 'contactame')->name('contactame');
Route::view('/experiencia', 'experiencia')->name('experiencia');
Route::view('/hobbies', 'hobbies')->name('hobbies');
Route::view('/quiensoy', 'quiensoy')->name('quiensoy');

Route::resource('arbolg', 'HomeController@arbol');


