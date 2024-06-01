<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comingsoon');
});

Route::get('/gitwrk', function () {
    return "current changes build using git actions";
});
