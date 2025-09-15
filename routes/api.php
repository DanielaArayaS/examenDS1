<?php

use App\Http\Controllers\Api\UsuarioController as ApiUsuarioController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Api\ClienteController as ApiClienteController;

Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('usuarios', ApiUsuarioController::class);
    Route::apiResource('products', ApiProductController::class);
    Route::apiResource('clients', ApiClienteController::class); 
});
