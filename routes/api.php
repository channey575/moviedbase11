<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\ReviewerController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('movies/{id}', MovieController::class);
    Route::apiResource('director/{id}', MovieController::class);
    Route::apiResource('actor/{id}', MovieController::class);
    Route::apiResource('ratings', RatingController::class);
    Route::apiResource('reviews', ReviewerController::class);
    
});
