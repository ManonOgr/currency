<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ConversionController;
use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\Api\PairsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 // Routes login / logout
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::get('/ping', function () {
    return response('API online', 200)->header('Content-Type', 'text/plain');
});

Route::resource('pairs', PairsController::class);
Route::resource('currencies', CurrencyController::class);
Route::get('conversions', [ConversionController::class, 'show']);
//Route::get('makeConversions', [ConversionController::class, 'convert']);

//conversions dans url
Route::get('{rate}/{currency_from_id}/{currency_to_id}',[ConversionController::class, 'conversions']);
