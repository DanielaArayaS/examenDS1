@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Clientes</h4>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Lista de Clientes</h5>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Agregar Cliente</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>RUT Empresa</th>
                        <th>Rubro</th>
                        <th>Razón Social</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Contacto</th>
                        <th>Email Contacto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->rut_empresa }}</td>
                        <td>{{ $client->rubro }}</td>
                        <td>{{ $client->razon_social }}</td>
                        <td>{{ $client->telefono }}</td>
                        <td>{{ $client->direccion }}</td>
                        <td>{{ $client->nombre_contacto }}</td>
                        <td>{{ $client->email_contacto }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar cliente?')">Eliminar</button>
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
