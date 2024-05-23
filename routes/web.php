<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\ProductController;
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

// 

Route::get('/index', [ProductController::class, 'index']);

Route::get('create', [ProductController::class, 'create'])->name('create');
Route::post('store', [ProductController::class, 'store'])->name('store');
Route::post('/print/{id}',  [ProductController::class, 'print'])->name('print');
Route::get('show', [ProductController::class, 'show'])->name('show');
Route::get('edit/{id}', [ProductController::class, 'Editshow'])->name('Editshow');
Route::get('update-container-status/{container}', [ProductController::class, 'updateStatus'])->name('update_container_status');
Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('document', [ProductController::class, 'document'])->name('document');

Route::get('/', [ProductController::class, 'dashboard'])->name('dashboard');
