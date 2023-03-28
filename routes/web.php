<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/shop', [App\Http\Controllers\ProductController::class, 'index'])->name('shop');
Route::get('/shop/add', [App\Http\Controllers\ProductController::class, 'create'])->name('add');
Route::post('/shop/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/shop/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::post('/shop/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
Route::delete('/shop/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete');