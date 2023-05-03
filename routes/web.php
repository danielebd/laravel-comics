<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {

    $data = [
        'comics' => config('db')
    ];
    

    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    return view('comic');
})->name('comic');

Route::get('/', function () {
    return view('home');
});