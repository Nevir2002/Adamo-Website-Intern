<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome'); default
    return to_route('getLogin');
})->name('welcome');
Route::get('/hehe', function () {
    return view('index');
})->name('test');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('getRegister');
Route::post('/login', [UserController::class, 'login'])->name('postLogin');
Route::post('/register', [UserController::class, 'register'])->name('postRegister');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('productDetails');
    Route::get('/newproduct', [ProductController::class, 'newProduct'])->name('getNewProduct');
});


Route::get('/component', function () {
    // return view('testpage');
    return view('products.index');
})->name('testPage');
