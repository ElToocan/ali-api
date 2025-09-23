<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::resource('customers', 'App\Http\Controllers\v1\CustomerController');
    Route::resource('category', 'App\Http\Controllers\v1\CategoryController');
    route::resource('orders', 'App\Http\Controllers\v1\OrderController');

});
