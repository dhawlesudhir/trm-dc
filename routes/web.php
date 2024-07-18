<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comingsoon');
});

Route::get('/login', function () {
    return "please login first";
})->name('login');

Route::fallback(function () {
    // todo:invalid request view
    return view('invalid');
});
