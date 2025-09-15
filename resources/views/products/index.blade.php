@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Productos</h4>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-products table">
                <thead class="border-top">
                    <tr>
                        <th>ID</th>
                        <th>SKU</th>
                        <th>Nombre</th>
                        <th>Descripción Corta</th>
                        <th>Descripción Larga</th>
                        <th>Imagen</th>
                        <th>Precio Neto</th>
                        <th>Precio Venta</th>
                        <th>Stock Actual</th>
                        <th>Stock Mínimo</th>
                        <th>Stock Bajo</th>
                        <th>Stock Alto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->descripcion_corta }}</td>
                        <td>{{ $product->descripcion_larga }}</td>
                        <td><img src="{{ $product->imagen_url }}" width="50" alt="Imagen"></td>
                        <td>{{ $product->precio_neto }}</td>
                        <td>{{ $product->precio_venta }}</td>
                        <td>{{ $product->stock_actual }}</td>
                        <td>{{ $product->stock_minimo }}</td>
                        <td>{{ $product->stock_bajo }}</td>
                        <td>{{ $product->stock_alto }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro deseas eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
