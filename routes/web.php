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

Route::get('/tickets/1', 'TicketController@getPickSeats')->name('getPickSeats');
Route::post('/tickets/1', 'TicketController@postPickSeats')->name('postPickSeats');

Route::get('/tickets/2', 'TicketController@getPickTickets')->name('getPickTickets');
Route::post('/tickets/2', 'TicketController@postPickTickets')->name('postPickTickets');

Route::get('/tickets/3', 'TicketController@getUserDetails')->name('getUserDetails');
Route::post('/tickets/3', 'TicketController@postUserDetails')->name('postUserDetails');

Route::get('/tickets/4', 'TicketController@getPayment')->name('getPayment');
Route::post('/tickets/4', 'TicketController@postPayment')->name('postPayment');

Route::get('/tickets/5', 'TicketController@getDone')->name('getDone');
Route::post('/tickets/5', 'TicketController@postDone')->name('postDone');
