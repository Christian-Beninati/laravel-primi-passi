<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $welcome = 'Welcome to Laravel';

    return view('home', compact('welcome'));
})->name("home");

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/partner', function () {
    return view('partner');
})->name('partner');
