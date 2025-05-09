<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/gioi-thieu-giam-doc', function () {
    return view('about');
})->name('about.director');
Route::get('/gioi-thieu-cong-ty-lasa-the-gioi-bao-ho', function () {
    return view('lasa');
})->name('lasa.director');