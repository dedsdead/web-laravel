<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Vinculo;
use Illuminate\Http\Request;

class DisciplinaController extends Controller{
    public function index(){
        $dados = Disciplina::all();
        $cursos = Curso::all();
        $vinculos = Vinculo::all();
        $professores = Professor::all();

        foreach ($dados as $value) {
            if(isset($cursos)){
                $aux = Curso::find($value['curso_id']);
                $value['curso_id'] = $aux->nome;
            }
            
        }

        return view('disciplinas.index', compact('dados', 'vinculos', 'professores'));
    }

    public function create(){
        $cursos = Curso::all();

        return view('disciplinas.create', compact('cursos'));
    }

    public function store(Request $request){
        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso' => 'required',
            'carga' => 'required|max:12|min:1'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);

        $obj_curso = Curso::find($request->curso);

        if(isset($obj_curso)) {
            $obj = new Disciplina();

            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $obj->carga = $request->carga;
            $obj->curso()->associate($obj_curso);
            $obj->save();
        }
        

        return redirect()->route('disciplinas.index');
    }

    public function show($id){
        //
    }

    public function edit($id) {
        $dados = Disciplina::find($id);
        $cursos = Curso::all();

        if(!isset($dados)) { return view('erros.id'); }

        return view('disciplinas.edit', compact('dados', 'cursos'));
    }

    public function update(Request $request, $id){
        $obj = Disciplina::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso' => 'required',
            'carga' => 'required|max:12|min:1'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];
        
        $request->validate($regras, $msgs);

        $obj->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'curso_id' => $request->curso,
            'carga' => $request->carga
        ]);

        $obj->save();

        return redirect()->route('disciplinas.index');
    }

    public function destroy($id){
        $obj = Disciplina::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $obj->destroy($id);

        return redirect()->route('disciplinas.index');
    }
}
