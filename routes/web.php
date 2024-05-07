<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('form', function () {
    return view('form');
});
Route::get('welcome', function () {
    return view('welcome');
});
