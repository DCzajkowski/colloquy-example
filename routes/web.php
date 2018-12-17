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

Route::get('/tickets/1', 'TicketController@getPickSeats');
Route::post('/tickets/1', 'TicketController@postPickSeats');

Route::get('/tickets/2', 'TicketController@getPickTickets');
Route::post('/tickets/2', 'TicketController@postPickTickets');

Route::get('/tickets/3', 'TicketController@getUserDetails');
Route::post('/tickets/3', 'TicketController@postUserDetails');

Route::get('/tickets/4', 'TicketController@getPayment');
Route::post('/tickets/4', 'TicketController@postPayment');

Route::get('/tickets/5', 'TicketController@getDone');
Route::post('/tickets/5', 'TicketController@postDone');

