@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Editar Usuario</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>RUT</label>
                <input type="text" name="rut" value="{{ $usuario->rut }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Apellido</label>
                <input type="text" name="apellido" value="{{ $usuario->apellido }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $usuario->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Contraseña (dejar vacío si no desea cambiar)</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
