<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts' , [\App\Http\Controllers\PostController::class , 'index']);
Route::get('/posts/{post}',[PostController::class  ,'show']);
Route::get('/posts/create',[PostController::class  ,'create']);
Route::get('/posts/{post}/edit',[PostController::class  ,'edit']);
