<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Eixo;
use App\Models\Vinculo;
use Illuminate\Http\Request;

class ProfessorController extends Controller{
    public function index(){
        $dados = Professor::all();
        $vinculos = Vinculo::all();
        $disciplinas = Disciplina::all();

        foreach ($dados as $dado) {
            $aux = Eixo::find($dado['eixo_id']);
            $dado['eixo_id'] = $aux->nome;
        }

        return view('professores.index', compact('dados', 'vinculos', 'disciplinas'));
    }

    public function create(){
        $eixos = Eixo::all();

        return view('professores.create', compact('eixos'));
    }

    public function store(Request $request){
        $regras = [
            'ativo' => 'nullable',
            'nome' => 'required|max:100|min:10',
            'email' => 'required|max:250|min:15|unique:professores',
            'siape' => 'required|max:10|min:8|unique:professores',
            'eixo' => 'required'
            
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]',
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        $obj_eixo = Eixo::find($request->eixo);

        if(isset($obj_eixo)){
            $obj = new Professor();

            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $obj->email = $request->email;
            $obj->siape = $request->siape;
            $obj->eixo()->associate($obj_eixo);
            $obj->ativo = $request->ativo;
            $obj->save();
        }
        

        return redirect()->route('professores.index');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $dados = Professor::find($id);
        $eixos = Eixo::all();
        
        if(!isset($dados)) { return view('erros.id'); }    

        return view('professores.edit', compact('dados', 'eixos'));
    }

    public function update(Request $request, $id){
        $obj = Professor::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $regras = [
            'ativo' => 'nullable',
            'nome' => 'required|max:100|min:10',
            'eixo' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);
        
        $obj->fill([
            'ativo' => $request->input('ativo', 0),
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'eixo_id' => $request->eixo
        ]);

        $obj->save();

        return redirect()->route('professores.index');
    }

    public function destroy($id){
        $obj = Professor::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $obj->destroy($id);

        return redirect()->route('professores.index');
    }
}
