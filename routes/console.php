<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Route::get('users', [UsersController::class, 'index']);
Route::get('users/{user}', [UsersController::class, 'show']);
Route::get('users/create', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);
Route::put('users/{user}', [UsersController::class, 'update']);
Route::delete('users/{user}', [UsersController::class, 'destroy']);