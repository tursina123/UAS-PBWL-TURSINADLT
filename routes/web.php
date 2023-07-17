<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginCheck']);
Route::post('/logout', [UserController::class, 'logout']);