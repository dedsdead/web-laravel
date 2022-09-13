<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller{
    public function index(){
        $this->authorize('viewAny', Cliente::class);
        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));

    }

    public function create(){
        $this->authorize('create', Cliente::class);

        return view('clientes.create');

    }

    public function store(Request $request){
        $this->authorize('create', Cliente::class);

    }

    public function show(Cliente $cliente){
        $this->authorize('view', $cliente);

        return view('clientes.show');

    }

    public function edit(Cliente $cliente){
        $this->authorize('update', $cliente);

        return view('clientes.edit');

    }

    public function update(Request $request, Cliente $cliente){
        $this->authorize('update', $cliente);

    }

    public function destroy(Cliente $cliente){
        $this->authorize('delete', $cliente);

        return view('clientes.destroy');

    }
}
