<?php


use App\Http\Controllers\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarApiController;
use App\Http\Controllers\BrandApiController;

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
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('/cars', CarApiController::class);
    Route::get('/car-custom/{car}/', [CarApiController::class, 'customCar']);
    Route::apiResource('/brands', BrandApiController::class);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('get-token', [TokenController::class, 'getToken']);
