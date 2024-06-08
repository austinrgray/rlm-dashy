<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::fallback([WelcomeController::class, 'index']);