<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comingsoon');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('auth.sign-up');
})->name('register');

Route::get('/signed-out', function () {
    return view('auth.sign-out');
})->name('signed-out');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');

Route::get('/locked-screen', function () {
    return view('auth.locked-screen');
})->name('locked-screen');

Route::get('/2FA-auth', function () {
    return view('auth.2FA');
})->name('2FA-auth');

Route::get('/dashboard', function () {
    return view('dashboard.main');
})->name('dashboard');

// Route::get('/login', function () {
//     return "please login first";
// })->name('login');

Route::fallback(function () {
    // todo:invalid request view
    return view('invalid', '', 404);
});
