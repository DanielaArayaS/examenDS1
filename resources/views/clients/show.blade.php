@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Detalle Cliente</h4>

    <div class="card">
        <div class="card-body">
            <p><strong>RUT Empresa:</strong> {{ $client->rut_empresa }}</p>
            <p><strong>Rubro:</strong> {{ $client->rubro }}</p>
            <p><strong>Razón Social:</strong> {{ $client->razon_social }}</p>
            <p><strong>Teléfono:</strong> {{ $client->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $client->direccion }}</p>
            <p><strong>Nombre Contacto:</strong> {{ $client->nombre_contacto }}</p>
            <p><strong>Email Contacto:</strong> {{ $client->email_contacto }}</p>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
