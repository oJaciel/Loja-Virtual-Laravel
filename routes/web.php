<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products/new', [ProductsController::class, 'store']);