<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;

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

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'artikels' => $category->artikels,
        'category' => $category->name
    ] );
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Artikels Categories',
        'categories' => Category::all()
    ] );
});


// Route::post('/', [ArtikelController::class, 'store']);
// Route::get('/{id}/edit', [ArtikelController::class, 'edit']);
// Route::put('/{id}', [ArtikelController::class, 'update']);
// Route::delete('/{id}', [ArtikelController::class, 'destroy']);

Route::get('/login', function () {
    return view('login.index');
})->name('login');


Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::resource('/dashboard/artikels', DashboardArtikelController::class);
Route::get('/dashboard/artikels/', [DashboardArtikelController::class, 'index']);
Route::get('/dashboard/artikels/add', [DashboardArtikelController::class, 'create']);
Route::post('/dashboard/artikels/add', [DashboardArtikelController::class, 'store']);
Route::get('/dashboard/artikels/{id}/edit', [DashboardArtikelController::class, 'edit']);
Route::put('/dashboard/artikels/{id}', [DashboardArtikelController::class, 'update']);
Route::delete('/dashboard/artikels/{id}', [DashboardArtikelController::class, 'destroy']);