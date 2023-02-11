<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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

Route::get('/', [ArtikelController::class, 'index']);
Route::post('/', [ArtikelController::class, 'store']);
Route::get('/{id}/edit', [ArtikelController::class, 'edit']);
Route::put('/{id}', [ArtikelController::class, 'update']);