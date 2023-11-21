<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\mejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\StockController;

//  Route::middleware(['auth:admin'])->group(function(){
    Route::apiResource('/category', CategoryController::class);
    
//  });
 //Route::apiResource('/user', UserController::class);
 Route::apiResource('/jenis', jenisController::class);
 Route::apiResource('/menu', MenuController::class);
 Route::apiResource('/stock', StockController::class);
Route::apiResource('/meja', mejaController::class);
Route::apiResource('/pelanggan', pelangganController::class);
Route::apiResource('/pemesanan', PemesananController::class);
 //Route::post('/login', [AdminAuthController::class, 'login']); 

