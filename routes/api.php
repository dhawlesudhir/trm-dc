<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/validate-token', [UserController::class, 'validateToken']);
});
