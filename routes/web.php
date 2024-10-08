<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class,'show']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('users/store', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);