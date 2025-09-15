@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Agregar Cliente</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">RUT Empresa</label>
                    <input type="text" name="rut_empresa" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Rubro</label>
                    <input type="text" name="rubro" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Razón Social</label>
                    <input type="text" name="razon_social" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre Contacto</label>
                    <input type="text" name="nombre_contacto" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Contacto</label>
                    <input type="email" name="email_contacto" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
