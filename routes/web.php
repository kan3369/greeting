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


// 簡単なあいさつ
Route::get('/comments/morning', function () {
    return view('comments.morning');
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


// URLによってメッセージが変わる
Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('comments.freeword', ['msg' => $msg]);
});


// ランダムな挨拶を返す
Route::get('/comments/random', function () {
    $greetings = ['おはよう', 'こんにちは', 'こんばんわ', 'おやすみ'];
    $randomGreeting = $greetings[array_rand($greetings)];
    
    return view('comments.random', ['greeting' => $randomGreeting]);
});
