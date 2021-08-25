<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/getToken', [ApiController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('v1/getExchangeRate',[ApiController::class,'getExchangeRate'])->name('v1/getExchangeRate');
    Route::get('v1/getExchangeRates',[ApiController::class,'getExchangeRates'])->name('v1/exchangeRates');
});



