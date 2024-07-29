<?php

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
})->name('getLogin');
Route::get('/register', function () {
    return view('auth.register');
})->name('getRegister');
Route::post('/login', [UserController::class, 'login'])->name('postLogin');
Route::post('/register', [UserController::class, 'register'])->name('postRegister');