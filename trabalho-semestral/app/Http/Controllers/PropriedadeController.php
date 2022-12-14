<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Cliente;
use App\Models\Propriedade;
use App\Models\Tipo;
use Illuminate\Http\Request;

use App\Events\PropriedadeEvent;

class PropriedadeController extends Controller{
    public function index(){
        $this->authorize('viewAny', Propriedade::class);
        $dados = Propriedade::all();

        foreach ($dados as $dado) {
            $dado['metragem'] = (string)$dado['metragem'].'m²';

            $aux = Tipo::find($dado['codigo_tipo']);
            if(isset($aux)){
                $dado['codigo_tipo'] = $aux->nome;
            }

            $aux = Caracteristica::find($dado['codigo_caracteristica']);
            if(isset($aux)){
                $dado['codigo_caracteristica'] = $aux->nome;
            }
            
        }

        $clientes = Cliente::all();

        return view('propriedades.index', compact('dados', 'clientes'));

    }

    public function create(){
        $this->authorize('create', Propriedade::class);
        $dados = Propriedade::all();
        $tipos = Tipo::all();
        $caracteristicas = Caracteristica::all();
        $clientes = Cliente::all();

        return view('propriedades.create', compact('dados', 'tipos', 'caracteristicas', 'clientes'));

    }

    public function store(Request $request){
        $this->authorize('create', Propriedade::class);
        
        $regras = [
            'codigo_tipo' => 'required',
            'codigo_caracteristica' => 'nullable',
            'id_cliente' => 'nullable',
            'descricao' => 'required|max:255|min:10',
            'metragem' => 'required|max:5|min:2',
            'matricula' => 'nullable',
            'endereco' => 'required|max:100|min:5'
            
        ];
        
        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        $obj_tipo = Tipo::find($request->codigo_tipo);
        $obj_caracteristica = Caracteristica::find($request->codigo_caracteristica);
        $obj_cliente = Cliente::find($request->id_cliente);

        $obj = new Propriedade();

        if(isset($obj_tipo)){
            $obj->tipo()->associate($obj_tipo);
            $obj->caracteristica()->associate($obj_caracteristica);
            $obj->cliente()->associate($obj_cliente);
            $obj->descricao = mb_strtoupper($request->descricao, 'UTF-8');
            $obj->metragem = $request->metragem;
            $obj->matricula = $request->matricula;
            $obj->endereco = mb_strtoupper($request->endereco, 'UTF-8');
            $obj->disponivel = 1;
            $obj->save();

            event(new PropriedadeEvent($obj));

            return redirect()->route('propriedades.index');
            
        }

    }

    public function show(Propriedade $propriedade){
        $this->authorize('view', $propriedade);

        return view('propriedades.show');

    }

    public function edit(Propriedade $propriedade){
        $this->authorize('update', $propriedade);

        $dados = $propriedade;
        $tipos = Tipo::all();
        $caracteristicas = Caracteristica::all();
        $clientes = Cliente::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('propriedades.edit', compact('dados', 'tipos', 'caracteristicas', 'clientes'));

    }

    public function update(Request $request, Propriedade $propriedade){
        $this->authorize('update', $propriedade);

        if(!isset($propriedade)) { return view('erros.id'); }

        $regras = [
            'codigo_tipo' => 'required',
            'codigo_caracteristica' => 'nullable',
            'id_cliente' => 'nullable',
            'descricao' => 'required|max:255|min:10',
            'metragem' => 'required|max:5|min:2',
            'matricula' => 'nullable',
            'endereco' => 'required|max:100|min:5'
            
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);
        
        $propriedade->fill([
            'codigo_tipo' => $request->codigo_tipo,
            'codigo_caracteristica' => $request->codigo_caracteristica,
            'id_cliente' => $request->id_cliente,
            'descricao' => mb_strtoupper($request->descricao, 'UTF-8'),
            'metragem' => $request->metragem,
            'matricula' => $request->matricula,
            'endereco' => mb_strtoupper($request->endereco, 'UTF-8'),
            'disponivel' => $request->input('disponivel', 0)

        ]);

        $propriedade->save();

        return redirect()->route('propriedades.index');

    }

    public function destroy(Propriedade $propriedade){
        $this->authorize('delete', $propriedade);

        if(!isset($propriedade)) { return view('erros.id'); }

        $propriedade->delete();

        return redirect()->route('propriedades.index');
        
    }
}
