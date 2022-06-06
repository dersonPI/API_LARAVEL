<?php

use App\Http\Controllers\MasterController;
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



Route::get('/launchers', [MasterController::class,'getAllFoguete']);
Route::get('/', [MasterController::class,'getFogueteIndex']);
Route::post('/launchers', [MasterController::class,'createFoguete']);
Route::get('/launchers/{launchId}',[MasterController::class,'getFoguete']);
Route::put('/launchers/{launchId}',[MasterController::class,'updateFoguete']);
Route::delete('/launchers/{launchId}',[MasterController::class,'deleteFoguete']);

