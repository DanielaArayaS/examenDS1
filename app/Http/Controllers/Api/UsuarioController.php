<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Aplicar autenticación para API
    public function __construct()
    {
        $this->middleware('auth:sanctum'); 
    }

    // Listar todos los usuarios
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    // Crear usuario
    public function store(Request $request)
    {
        $request->validate([
            'rut' => 'required|unique:users,rut',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $usuario = User::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $usuario
        ], 201);
    }

    // Mostrar usuario específico
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return response()->json($usuario, 200);
    }

    // Actualizar usuario
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'rut' => 'required|unique:users,rut,' . $usuario->id,
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'password' => 'nullable|min:6',
        ]);

        $usuario->rut = $request->rut;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        if ($request->password) {
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();

        return response()->json([
            'message' => 'Usuario actualizado correctamente',
            'data' => $usuario
        ], 200);
    }

    // Eliminar usuario
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
}
