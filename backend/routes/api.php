<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//orders routes
Route::apiResource('orders', 'App\Http\Controllers\OrderController');
Route::apiResource('order-items', 'App\Http\Controllers\OrderItemController');

//products routes
Route::apiResource('product', 'App\Http\Controllers\ProductsController');

