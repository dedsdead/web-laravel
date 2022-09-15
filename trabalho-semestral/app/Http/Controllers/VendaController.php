<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Propriedade;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VendaController extends Controller{
    public function index(){
        $this->authorize('viewAny', Venda::class);
        $dados = Venda::all();
        

        foreach ($dados as $dado) {
            $aux = Propriedade::find($dado['codigo_propriedade']);
            if(isset($aux)){
                $dado['codigo_propriedade'] = $aux->nome;
                
            }

            $aux = Cliente::find($aux['id_cliente']);

            if(isset($aux)){
                $dado['nome_proprietario'] = $aux->nome;

            }

            $aux = Cliente::find($dado['id_comprador']);
            if(isset($aux)){
                $dado['id_comprador'] = $aux->nome;
            }
            
        }

        return view('vendas.index', compact('dados'));

    }

    public function create(){
        $this->authorize('create', Venda::class);
        $dados = Venda::all();
        $propriedades = Propriedade::where('disponivel', 1)->get();
        $clientes = Cliente::all();

        return view('vendas.create', compact('dados', 'propriedades', 'clientes'));

    }

    public function store(Request $request){
        $this->authorize('viewAny', Venda::class);

        $regras = [
            'codigo_propriedade' => 'required',
            'id_comprador' => 'required',
            'data_venda' => 'required',
            'valor_venda' => 'required|max:12|min:4'
            
        ];
        
        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        $obj_propriedade = Propriedade::find($request->codigo_propriedade);
        $obj_cliente = Cliente::find($request->id_comprador);

        $obj = new Venda();

        if(isset($obj_propriedade) && isset($obj_cliente)){
            $obj->propriedade()->associate($obj_propriedade);
            $obj->cliente()->associate($obj_cliente);
            $obj->data_venda = $request->data_venda;
            $obj->valor_venda = $request->valor_venda;
            $obj->save();

            $obj_propriedade->update(['disponivel' => 0]);

            return redirect()->route('vendas.index');
            
        }
        
    }

    public function show(Venda $venda){
        $this->authorize('viewAny', $venda);

        return view('vendas.show');

    }

    public function edit(Venda $venda){
        $this->authorize('update', $venda);

        $dados = $venda;
        $propriedades = Propriedade::where('disponivel', 1)->get();
        $clientes = Cliente::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('vendas.edit', compact('dados', 'propriedades', 'clientes'));

    }

    public function update(Request $request, Venda $venda){
        $this->authorize('update', $venda);
        
        if(!isset($venda)) { return view('erros.id'); }

        $obj_propriedade = Propriedade::find($venda->codigo_propriedade);
        
        if (isset($obj_propriedade)) 
            $obj_propriedade->update(['disponivel' => 1]);

        $regras = [
            'codigo_propriedade' => 'required',
            'id_comprador' => 'required',
            'data_venda' => 'required',
            'valor_venda' => 'required|max:12|min:4'
            
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);
        
        $venda->fill([
            'codigo_propriedade' => $request->codigo_propriedade,
            'id_comprador' => $request->id_comprador,
            'data_venda' => $request->data_venda,
            'valor_venda' => $request->valor_venda

        ]);

        $obj_propriedade2 = Propriedade::find($request->codigo_propriedade);
        if (isset($obj_propriedade2)) 
            $obj_propriedade2->update(['disponivel' => 0]);

        $venda->save();

        return redirect()->route('vendas.index');

    }

    public function destroy(Venda $venda){
        $this->authorize('delete', $venda);

        if(!isset($venda)) { return view('erros.id'); }

        $obj_propriedade = Propriedade::find($venda->codigo_propriedade);
        if (isset($obj_propriedade)) 
            $obj_propriedade->update(['disponivel' => 1]);

        $venda->delete();

        return redirect()->route('vendas.index');
        
    }

}
