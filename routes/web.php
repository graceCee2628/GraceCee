<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index'); 
Route::get('/about','PagesController@about'); 
Route::get('/services','PagesController@services');
Route::resource('tickets', 'TicketsController');
Auth::routes();
Route::get('/home', 'TicketsController@index');
Route::get('/my_ticket', 'HomeController@my_ticket');
/*
|--------------------------------------------------------------------------
| ADMIN ACCESS
|--------------------------------------------------------------------------
|
*/
//Route::get('/admin', 'HomeController@index');
Route::resource('/admin', 'HomeController');