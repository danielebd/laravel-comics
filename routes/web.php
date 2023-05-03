<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    $comics = config('db.comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/comics', function () {
    return view('comic');
})->name('comic');

Route::get('/', function () {
    return view('home');
});