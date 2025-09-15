@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Dashboard</h4>

    <div class="row">
        <!-- Total Usuarios -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <h3>{{ $totalUsuarios }}</h3>
                </div>
            </div>
        </div>

        <!-- Total Productos -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <h3>{{ $totalProductos }}</h3>
                </div>
            </div>
        </div>

        <!-- Total Clientes -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <h3>{{ $totalClientes }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
