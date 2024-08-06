<?php

use App\Helpers\Helper;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LedgerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminOnlyRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;

Route::POST('/login', [AuthController::class, 'login'])->name('api.login');
Route::POST('/signup', [UserController::class, 'signup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::POST('/logout', [AuthController::class, 'logout']);
    Route::POST('/update-password', [AuthController::class, 'updatePassword']);

    // User Management
    Route::controller(UserController::class)->group(function () {
        Route::GET('/retailers', 'getRetailersList')->name('api.retailers');
        Route::POST('/user/update-profile/{user}', 'update')->name('api.update-profile')->can('update-profile', 'user');
    });

    //Ledger
    Route::controller(LedgerController::class)->group(function () {
        Route::GET('/statement', 'getStatement')->name('api.user.statement');
    });
});

Route::middleware(['auth:sanctum', AdminOnlyRoutes::class])->group(function () {

    Route::controller(UserController::class)->group(function () {
        Route::POST('/signup_distributor', 'signup')->name('api.signup_distributor');
        Route::GET('/users', 'index')->name('api.users');
        Route::GET('/distributors', 'getDistributorList')->name('api.distributor');
        Route::POST('/user/admin_updates/{user}', 'admin_updates')->name('api.admin_updates');
    });
});

Route::get('/test', function (Request $request) {
    // session()->flash('status', 'Task was successful!');
    $key = rand(1, 20);
    Cache::put($key, 'dummy value');

    return Cache::get($key);
})->middleware(['auth:sanctum', 'throttle:api']);

Route::fallback(function () {
    return response("not a valid request", 403);
});
