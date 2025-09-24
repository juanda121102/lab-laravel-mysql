<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/cats', [CatController::class, 'get']);
Route::post('/cats', [CatController::class, 'store']);

Route::get('/dogs', [DogController::class, 'get']);
Route::post('dogs', [DogController::class,'store']);