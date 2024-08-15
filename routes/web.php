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



// Features routes

Route::get('/dashboard', function () {
    return view('dashboard.main');
})->name('dashboard');

Route::get('/mobile/recharge', function () {
    return view('pages.mobile-recharge');
})->name('mobile-recharge');

Route::get('/service/transactions', function () {
    return view('pages.transaction');
})->name('service.transactions');

Route::get('/fund/statements', function () {
    return view('fund.statements');
})->name('fund.statement');

Route::fallback(function () {
    // todo:invalid request view
    return view('invalid', [], [404]);
});
