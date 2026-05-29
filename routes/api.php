<?php

use App\Http\Controllers\Api\v1\ApiTropheeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routes publiques
Route::get('/v1/trophees', [ApiTropheeController::class, 'index']);

// Routes authentifiées
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
