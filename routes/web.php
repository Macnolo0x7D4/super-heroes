<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\UniverseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('genders', GenderController::class);
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroController::class);
