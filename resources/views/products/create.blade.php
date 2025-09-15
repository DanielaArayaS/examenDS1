@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Agregar Producto</h4>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>SKU</label>
            <input type="text" name="sku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción Corta</label>
            <input type="text" name="descripcion_corta" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción Larga</label>
            <textarea name="descripcion_larga" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>URL Imagen</label>
            <input type="text" name="imagen_url" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Precio Neto</label>
            <input type="number" name="precio_neto" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock Actual</label>
            <input type="number" name="stock_actual" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock Mínimo</label>
            <input type="number" name="stock_minimo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock Bajo</label>
            <input type="number" name="stock_bajo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock Alto</label>
            <input type="number" name="stock_alto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
