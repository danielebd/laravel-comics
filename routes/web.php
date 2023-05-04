<?php

use Illuminate\Support\Facades\Route;



Route::get('/comics', function () {
    $dc = config('db.comics_list');
    return view('comics', compact('dc'));
})->name('comics');

Route::get('/comic/{index}', function ($index) {

    $dc_total = config('db.comics_list');
    if($index > count($dc_total) - 1){
        abort(404);
    };
    $dc = $dc_total[$index];

    return view('/comic', compact('dc'));
})->name('comic')->where('index', '[0-9]+');

