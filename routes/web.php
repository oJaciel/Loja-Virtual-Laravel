<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

//Route do index - products
Route::get('/products', [ProductsController::class, 'index']);

//Routes para create - products
Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products/new', [ProductsController::class, 'store']);

//Routes para update - products
Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/', [ProductsController::class, 'update']);

//Rota para delete - products
Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);