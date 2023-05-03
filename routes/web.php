<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    $comics = config('db.comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/comic/{index}', function ($index) {

    $comics_total = config('db.comics');
    if($index > count($comics_total) - 1){
        abort(404);
    };
    $comics = $comics_total[$index];

    return view('comic', compact('comics'));
})->name('comic')->where('index', '[0-9]+');

