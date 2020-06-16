<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CagnoliniController@index')->name('home');
Route::get('/cagnolino/{id}', 'CagnoliniController@showCagnolino')->name('cagnolino');
