<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller{
    public function index(){
        $this->authorize('viewAny', Venda::class);
        $vendas = Venda::all();

        return view('vendas.index', compact('vendas'));

    }

    public function create(){
        $this->authorize('create', Venda::class);

        return view('vendas.create');

    }

    public function store(Request $request){
        $this->authorize('viewAny', Venda::class);

    }

    public function show(Venda $venda){
        $this->authorize('viewAny', $venda);

        return view('vendas.show');

    }

    public function edit(Venda $venda){
        $this->authorize('update', $venda);

        return view('vendas.edit');

    }

    public function update(Request $request, Venda $venda){
        $this->authorize('update', $venda);

    }

    public function destroy(Venda $venda){
        $this->authorize('delete', $venda);

        return view('vendas.destroy');
        
    }
}
