<?php

use App\Http\Controllers\ShowHomeController;
use App\Http\Middleware\Cloaker;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomeController::class)
    ->name('home.show')
    ->middleware(Cloaker::class);
