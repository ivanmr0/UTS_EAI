<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
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

//Route::apiResource('produk', ProdukController::class);

Route::get('produk', [ProdukController::class,'index']);
Route::post('produk', [ProdukController::class,'store']);
Route::get('produk/{id}', [ProdukController::class,'show']);
Route::put('produk/{id}', [ProdukController::class,'update']);
Route::delete('produk/{id}', [ProdukController::class,'destroy']);

Route::get('pembelian', [PembelianController::class,'index']);
Route::post('pembelian', [PembelianController::class,'store']);
Route::get('pembelian/{id}', [PembelianController::class,'show']);
Route::put('pembelian/{id}', [PembelianController::class,'update']);
