<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Cliente;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ClienteController extends Controller{
    public function index(){
        $this->authorize('viewAny', Cliente::class);
        $dados = Cliente::all();

        return view('clientes.index', compact('dados'));

    }

    public function create(){
        $this->authorize('create', Cliente::class);
        $tipos = Tipo::all();
        $caracteristicas = Caracteristica::all();

        return view('clientes.create', compact('tipos', 'caracteristicas'));

    }

    public function store(Request $request){
        $this->authorize('create', Cliente::class);

        $regras = [
            'cpf' => 'required|max:19|min:11|unique:clientes',
            'codigo_tipo' => 'nullable',
            'codigo_caracteristica' => 'nullable',
            'nome' => 'required|max:100|min:10',
            'telefone' => 'required|max:11|min:8',
            'endereco' => 'required|max:100|min:5'
            
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        $obj_tipo = Tipo::find($request->tipo);
        $obj_caracteristica = Caracteristica::find($request->caracteristica);

        $obj = new Cliente();

        $obj->tipo()->associate($obj_tipo);
        $obj->caracteristica()->associate($obj_caracteristica);
        $obj->cpf = $request->cpf;
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
        $obj->telefone = $request->telefone;
        $obj->endereco = mb_strtoupper($request->endereco, 'UTF-8');
        $obj->save();

        return redirect()->route('clientes.index');

    }

    public function show(Cliente $cliente){
        $this->authorize('view', $cliente);

        return view('clientes.show');

    }

    public function edit(Cliente $cliente){
        $this->authorize('update', $cliente);

        $dados = $cliente;

        $tipos = Tipo::all();
        $caracteristicas = Caracteristica::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('clientes.edit', compact('dados', 'tipos', 'caracteristicas'));

    }

    public function update(Request $request, Cliente $cliente){
        $this->authorize('update', $cliente);

        if(!isset($cliente)) { return view('erros.id'); }

        $regras = [
            'codigo_tipo' => 'nullable',
            'codigo_caracteristica' => 'nullable',
            'nome' => 'required|max:100|min:10',
            'telefone' => 'required|max:11|min:8',
            'endereco' => 'required|max:100|min:5'
            
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);
        
        $cliente->fill([
            'codigo_tipo' => $request->tipo,
            'codigo_caracteristica' => $request->caracteristica,
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'telefone' => $request->telefone,
            'endereco' => mb_strtoupper($request->endereco, 'UTF-8')
        ]);

        $cliente->save();

        return redirect()->route('clientes.index');

    }

    public function destroy(Cliente $cliente){
        $this->authorize('delete', $cliente);

        if(!isset($cliente)) { return view('erros.id'); }

        $cliente->delete();

        return redirect()->route('clientes.index');

    }
}
