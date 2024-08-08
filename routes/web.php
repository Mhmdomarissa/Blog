<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test' , [\App\Http\Controllers\TestController::class , 'testAction']);
