<?php

use App\Http\Controllers\ShowHomeController;
use App\Http\Middleware\FacebookCloaker;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomeController::class)
    ->name('home.show')
    ->middleware(FacebookCloaker::class);
