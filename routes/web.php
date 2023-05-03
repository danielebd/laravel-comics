<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {

    $data = [
        'comics' => config('db')
    ];
    

    return view('home', $data);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});