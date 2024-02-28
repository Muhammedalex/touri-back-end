<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::prefix('country')
    ->controller(CountryController::class)
    ->group(function () {
        Route::post('/create','store');
    });

