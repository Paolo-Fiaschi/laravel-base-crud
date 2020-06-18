<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'OminiController@index') -> name('home');
Route::get('/showOmino/{id}', 'OminiController@showOmino') -> name('showOmino');
Route::get('/showOmino/delete/{id}', 'OminiController@delete') -> name('delete');
