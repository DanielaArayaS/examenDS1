@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Editar Producto</h4>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>SKU</label>
            <input type="text" name="sku" class="form-control" value="{{ $product->sku }}" required>
        </div>
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $product->nombre }}" required>
        </div>
        <div class="mb-3">
            <label>Descripción Corta</label>
            <input type="text" name="descripcion_corta" class="form-control" value="{{ $product->descripcion_corta }}" required>
        </div>
        <div class="mb-3">
            <label>Descripción Larga</label>
            <textarea name="descripcion_larga" class="form-control" required>{{ $product->descripcion_larga }}</textarea>
        </div>
        <div class="mb-3">
            <label>URL Imagen</label>
            <input type="text" name="imagen_url" class="form-control" value="{{ $product->imagen_url }}" required>
        </div>
        <div class="mb-3">
            <label>Precio Neto</label>
            <input type="number" name="precio_neto" step="0.01" class="form-control" value="{{ $product->precio_neto }}" required>
        </div>
        <div class="mb-3">
            <label>Precio Venta</label>
            <input type="number" name="precio_venta" step="0.01" class="form-control" value="{{ $product->precio_venta }}" required>
        </div>
        <div class="mb-3">
            <label>Stock Actual</label>
            <input type="number" name="stock_actual" class="form-control" value="{{ $product->stock_actual }}" required>
        </div>
        <div class="mb-3">
            <label>Stock Mínimo</label>
            <input ty
