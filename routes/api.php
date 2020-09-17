<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Games;
use App\Http\Controllers\API\Rounds;

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

Route::post('/draw/games', [Games::class, "store"]);

Route::post('/draw/games/{id}/rounds', [Rounds::class, "store"]);

Route::delete('/draw/games/{id}', [Rounds::class, "destroy"]);

//live version:
//Route::post('/draw/games/{id}/{round}', [Rounds::class, "store"]);

//