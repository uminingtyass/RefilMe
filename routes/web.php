<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\NotFoundController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/create', [BarangController::class, 'create']);

Route::get('/kurir', [KurirController::class, 'index']);

Route::get('/{err}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}/{err3}', [NotFoundController::class, 'index']);