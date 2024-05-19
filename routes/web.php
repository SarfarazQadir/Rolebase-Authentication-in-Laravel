<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/addproduct', [ProductController::class, 'index'])->name('addproduct');
Route::get('/showproduct', [ProductController::class, 'show'])->name('showproduct');
Route::post('/insert', [ProductController::class, 'create'])->name('insert');
Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('delete');
