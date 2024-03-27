<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PeriodicidadeController;
use App\Http\Controllers\SituationController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Agrupamento das rotas relacionadas a 'conta'
Route::prefix('conta')->group(function () {
    Route::resource('conta', ContaController::class);
    Route::resource('categoria', CategoriaController::class);
    Route::resource('periodicidade', PeriodicidadeController::class);
    Route::resource('situation', SituationController::class);
});
