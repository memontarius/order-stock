<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.product.index');
        })->name('admin.index');

        Route::get('/products', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');

        Route::get('/orders', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/orders/create', [OrderController::class, 'create'])->name('admin.order.create');
    });

