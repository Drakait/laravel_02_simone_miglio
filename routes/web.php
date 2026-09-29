<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');
Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');