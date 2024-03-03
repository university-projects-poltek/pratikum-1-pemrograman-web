<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProductController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/list-product/{id}/{name}',  [ListProductController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'contact']);
});
