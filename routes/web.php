<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});
Route::get('chi-siamo', function () {
    return view('chi-siamo');
});
Route::get('servizi', function () {
    return view('servizi');
});
