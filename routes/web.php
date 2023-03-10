<?php

use App\Http\Controllers\ProductoController;
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


Route::get('/', [ProductoController::class, 'allProducts']);
Route::get('/products', [ProductoController::class, 'allProducts'])->name('allProducts');
Route::get('/products/new', [ProductoController::class, 'newProductForm']);
Route::post('/products/new', [ProductoController::class, 'newProduct'])->name('insertProduct');
Route::get('/products/filter', [ProductoController::class, 'filterForm'])->name('vistaFiltros');
Route::post('/products/filter', [ProductoController::class, 'filter']);
Route::get('/products/{id}', [ProductoController::class, 'productDetails'])->name('productDetails');
Route::post('/products/{id}', [ProductoController::class, 'productUpdate'])->name('updateProduct');
