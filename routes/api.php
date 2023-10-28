<?php

use App\Http\Controllers\Api\V1\GameController;
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

Route::middleware('tokencheck')->get('/user', function (Request $request) {
    return json_encode($request->user);
});



Route::group(['prefix'=> 'v1'], function(){
    Route::group(['middleware' => ['tokencheck']], function () {
        Route::get('/games', [GameController::class, 'index']);
    });
} );