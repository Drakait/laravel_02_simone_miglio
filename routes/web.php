<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/homepage', [PublicController::class, 'homepage'])->name('home');
Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('chi-siamo');
Route::get('/contacts', [PublicController::class, 'contacts'])->name('contatti');
Route::get('/general', [PublicController::class, 'varie'])->name('varie');