<?php

use App\Http\Controllers\ShowHomeController;
use App\Http\Middleware\FacebookCloaker;
use App\Http\Middleware\GoogleCloaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomeController::class)
    ->name('home.show')
    ->middleware([FacebookCloaker::class, GoogleCloaker::class]);

Route::get('/x9', function (Request $request) {
    return view('welcome');
})->name('x9');
