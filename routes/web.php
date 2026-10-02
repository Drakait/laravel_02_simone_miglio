<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/about-us', [PublicController::class, 'aboutUs'])->name('chi-siamo');
Route::get('/contacts', [PublicController::class, 'contacts'])->name('contatti');
Route::get('/services', [ArticleController::class, 'servizi'])->name('servizi');
Route::get('/services/{id}', [ArticleController::class, 'dettaglio'])->name('dettaglio');