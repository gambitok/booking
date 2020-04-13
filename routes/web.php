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

Route::post('tickets', 'TicketsController@store')->name('tickets.store');

Route::post('tickets/{ticket}', 'TicketsController@destroy')->name('destroy');

Route::resource('tickets', 'TicketsController');

Route::get('search', 'TicketsController@search');

//Route::post('search/barcode', 'TicketsController@barcode')->name('barcode');
//Route::get('mail', 'HomeController@mail')->name('mail');
Route::get('barcode', 'TicketsController@barcode')->name('barcode');


