<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\CustomerController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\OrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\v1\AuthController::class , 'login']);

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('orders', OrderController::class);

});

if ( env('APP_DEBUG') === true) {
    Route::prefix('v1/debug')->group(function () {
        Route::resource('customers', CustomerController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('orders', OrderController::class);

    });
}
