<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comingsoon');
});

Route::get('/test', function () {
    return "runs-on:self test";
});
