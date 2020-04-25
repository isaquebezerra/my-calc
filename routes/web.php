<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CalcController@home');
Route::post('/calc', 'CalcController@calc');
