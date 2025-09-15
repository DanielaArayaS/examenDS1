<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
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

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente creado exitosamente');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
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

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Cliente eliminado exitosamente');
    }
}
