<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TokenController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/post', PostController::class);
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/post/category/{category}', [CategoryController::class, 'countPost']);
    Route::get('/post/title/{title}', [PostController::class, 'searchPost']);
});

Route::post('/get-token', [TokenController::class, 'getToken']);
