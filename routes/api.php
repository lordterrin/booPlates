<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;

/* API */
use App\Http\Controllers\Api\V1\MeController;
use App\Http\Controllers\Api\V1\StateController as ApiStateController;
use App\Http\Controllers\Api\V1\LeaderboardController as ApiLeaderboardController;


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

Route::post('/checkState', [StateController::class, 'checkState']);

Route::get('/ping', function () {
    return response()->json(['ok' => true]);
});

Route::prefix('v1')->group(function() {


    /* all v1 API routes live here */
    Route::get('/me', [MeController::class, 'show']);

    Route::get('/states', [ApiStateController::class, 'index']);

    Route::get('leaderboard', [ApiLeaderboardController::class, 'index']);

});