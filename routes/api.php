<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\CustomerController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\OrderController;
use App\Http\Middleware\LogCatching;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\API\AuthController::class , 'login'])->middleware(LogCatching::class);

Route::middleware('auth:sanctum')->middleware(LogCatching::class)->prefix('v1')->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('orders', OrderController::class);

});

if ( config('app.debug')) {
    Route::prefix('v1/debug')->middleware(LogCatching::class)->group(function () {
        Route::resource('customers', CustomerController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('orders', OrderController::class);

    });
}
