<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Client::all());
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return response()->json($client);
    }

    public function store(Request $request)
    {
        $request->validate([
            'rut_empresa' => 'required|unique:clients,rut_empresa',
            'rubro' => 'required',
            'razon_social' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombre_contacto' => 'required',
            'email_contacto' => 'required|email|unique:clients,email_contacto',
        ]);

        $client = Client::create($request->all());
        return response()->json($client, 201);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $request->validate([
            'rut_empresa' => 'required|unique:clients,rut_empresa,' . $client->id,
            'rubro' => 'required',
            'razon_social' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombre_contacto' => 'required',
            'email_contacto' => 'required|email|unique:clients,email_contacto,' . $client->id,
        ]);

        $client->update($request->all());
        return response()->json($client);
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return response()->json(null, 204);
    }
}
