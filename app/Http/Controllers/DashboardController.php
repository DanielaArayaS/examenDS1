<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cliente;

class DashboardController extends Controller
{
    // Aseguramos que solo usuarios logueados puedan acceder
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Función para mostrar el dashboard
    public function index()
    {
        // Contamos los registros de cada tabla
        $totalUsuarios = User::count();
        $totalProductos = Product::count();
        $totalClientes = Cliente::count();

        // Retornamos la vista y le pasamos los totales
        return view('dashboard.index', compact('totalUsuarios', 'totalProductos', 'totalClientes'));
    }
}
