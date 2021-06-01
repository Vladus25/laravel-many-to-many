<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');

// Info di un oggetto
Route::get('/employee/{index}', 'HomeController@employee') -> name('employee');

// Modificazione di un oggetto
Route::get('/edit/employee/{id}', 'HomeController@edit') -> name('edit');
Route::post('/update/employee/{id}', 'HomeController@update') -> name('update');
