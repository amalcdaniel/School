<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FController;

use App\Http\Controllers\SController;

use App\Http\Controllers\BController;

use App\Http\Controllers\BOController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createfaculty',[FController::class,'create']);

Route::get('/createstudent',[SController::class,'create']);

Route::get('/createbus',[BController::class,'create']);

Route::post('/facultyread',[FController:: class,'store']);

Route::post('/studentread',[SController::class,'store']);

Route::post('/busread',[BController::class,'store']);

Route::get('/createbook',[BOController::class,'create']);

Route::post('/addbook',[BOController::class,'store']);