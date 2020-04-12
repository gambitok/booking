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


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::resource('flights', 'FlightsController');

Route::post('flights/filter', 'FlightsController@filter')->name('filter');

Route::resource('tickets', 'TicketsController');


