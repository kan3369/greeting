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
    return view('welcome');
});

Route::get('/comments/mornig', function () {
    return view('comments.mornig');
});

Route::get('/comments/afternoon', function () {
    return view('comments.afternoon');
});

Route::get('/comments/evening', function () {
    return view('comments.evening');
});

Route::get('/comments/night', function () {
    return view('comments.night');
});
