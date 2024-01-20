<?php

use App\Http\Controllers\PersegiController;
use App\Http\Controllers\PersegiPanjangController;
use App\Http\Controllers\LuasLingkaranController;
use App\Http\Controllers\SegitigaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persegi/{sisi}', [PersegiController::class, 'hitungLuas']);
Route::get('/persegi_panjang/{panjang}/{lebar}', [PersegiPanjangController::class, 'hitungLuas']);
Route::get('/lingkaran/{radius}', [LuasLingkaranController::class, 'hitungLuasLingkaran']);
Route::get('/segitiga/{alas}/{tinggi}', [SegitigaController::class, 'hitungLuas']);
