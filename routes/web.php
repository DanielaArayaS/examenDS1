<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('products', ProductController::class);
    Route::resource('clients', ClienteController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
