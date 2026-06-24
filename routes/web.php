<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo7Controller;

Route::get('/', function () {
    return view('welcome');
});

// Todo 7 ki routes
Route::get('/todo7', [Todo7Controller::class, 'index']);
Route::post('/todo7/add', [Todo7Controller::class, 'store']);
Route::get('/todo7/edit/{id}', [Todo7Controller::class, 'edit']);
Route::post('/todo7/update/{id}', [Todo7Controller::class, 'update']);
Route::get('/todo7/delete/{id}', [Todo7Controller::class, 'destroy']);