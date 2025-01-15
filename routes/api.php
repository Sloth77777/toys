<?php

use App\Http\Controllers\IndexProductController;
use App\Http\Controllers\ShowProductController;
use App\Modules\Api\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login']);
