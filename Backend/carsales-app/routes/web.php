<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;

Route::get('/', function () {
    return view('welcome');
});
//marcas
Route::post('storebrand', [BrandController::class, 'store']);
Route::get('allbrands', [BrandController::class, 'index']);
Route::put('updatebrand/{id}', [BrandController::class, 'update']);
Route::delete('deletebrand/{id}', [BrandController::class, 'destroy']);
//modelos
Route::post('storemodel', [CarModelController::class, 'store']);
Route::get('allmodels', [CarModelController::class, 'index']);
Route::put('updatemodel/{id}', [CarModelController::class, 'update']);
Route::delete('deletemodel/{id}', [CarModelController::class, 'destroy']);