<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/export', [ProductController::class, 'export'])->name('product.export');
    Route::post('product/import', [ProductController::class, 'import'])->name('product.import');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
});