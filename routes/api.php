<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/update-password', [AuthController::class, 'updatePassword']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index');
    });
});

Route::fallback(function () {
    return "Not a valid api request";
});
