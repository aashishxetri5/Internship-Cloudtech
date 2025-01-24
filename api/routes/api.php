<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\StudentController;
use Illuminate\Support\Facades\Route;

Route::post('signup', [AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('students', StudentController::class)
    ->only('index', 'store', 'show', 'update', 'destroy')
    ->middleware('auth:sanctum');

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');