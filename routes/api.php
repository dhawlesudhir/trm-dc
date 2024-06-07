<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/validate-token', [UserController::class, 'validateToken']);
});
