@extends('layouts.app')

@section('title', 'Detalle Usuario')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Detalle del Usuario</h5>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>RUT:</strong> {{ $usuario->rut }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
