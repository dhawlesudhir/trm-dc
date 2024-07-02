<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::POST('/login', [AuthController::class, 'login'])->name('api.login');
Route::POST('/signup', [UserController::class, 'signup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::POST('/logout', [AuthController::class, 'logout']);
    Route::POST('/update-password', [AuthController::class, 'updatePassword'])->can('admin');

    // User Management
    Route::controller(UserController::class)->group(function () {
        Route::GET('/users', 'index')->name('api.users')->can('get-all-users');
        Route::GET('/retailers', 'getRetailersList')->name('api.retailers')->can('get-all-retailers');
        Route::GET('/distributors', 'getDistributorList')->name('api.distributor')->can('get-all-users');
        Route::POST('/user/update-profile/{user}', 'update')->name('api.update-profile')->can('update-profile', 'user');
        Route::POST('/user/admin_updates/{user}', 'admin_updates')->name('api.admin_updates')->can('user-management');
    });
});


Route::fallback(function () {
    return "Not a valid api request";
});
