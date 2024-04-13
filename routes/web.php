<?php

use App\Controllers\HomeController;
use Src\Http\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/servis', [HomeController::class, 'servis']);

