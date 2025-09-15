@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Detalle del Producto</h4>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>SKU:</strong> {{ $product->sku }}</p>
            <p><strong>Nombre:</strong> {{ $product->nombre }}</p>
            <p><strong>Descripción Corta:</strong> {{ $product->descripcion_corta }}</p>
            <p><strong>Descripción Larga:</strong> {{ $product->descripcion_larga }}</p>
            <p><strong>Imagen:</strong> <img src="{{ $product->imagen_url }}" width="100" alt="Imagen"></p>
            <p><strong>Precio Neto:</strong> {{ $product->precio_neto }}</p>
            <p><strong>Precio Venta:</strong> {{ $product->precio_venta }}</p>
            <p><strong>Stock Actual:</strong> {{ $product->stock_actual }}</p>
            <p><strong>Stock Mínimo:</strong> {{ $product->stock_minimo }}</p>
            <p><strong>Stock Bajo:</strong> {{ $product->stock_bajo }}</p>
            <p><strong>Stock Alto:</strong> {{ $product->stock_alto }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
