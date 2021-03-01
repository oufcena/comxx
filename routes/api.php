<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\ProductController;
Route::get('/products', [ProductController::class, 'api']);

use App\Http\Controllers\SaleController;
Route::get('/sales', [SaleController::class, 'api']);

use App\Http\Controllers\ContactController;
Route::get('/contacts', [ContactController::class, 'api']);

use App\Http\Controllers\TaskController;
Route::get('/tasks', [TaskController::class, 'api']);

use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'api']);