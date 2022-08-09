<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class AlunoController extends Controller{
    public function index(){
        $dados = Aluno::with(['disciplina'])->get();

        foreach ($dados as $dado) {
            $aux = Curso::find($dado['curso_id']);
            $dado['curso_id'] = $aux->nome;
        }

        return view('alunos.index', compact('dados'));
    }

    public function create(){
        $cursos = Curso::all();

        return view('alunos.create', compact('cursos'));
    }

    public function store(Request $request){
        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);

        $obj_curso = Curso::find($request->curso);

        if(isset($obj_curso)){
            $obj = new Aluno();

            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $obj->curso()->associate($obj_curso);

            $obj->save();
        }
        

        return redirect()->route('alunos.index');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $dados = Aluno::find($id);
        $cursos = Curso::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('alunos.edit', compact('dados', 'cursos'));
    }

    public function update(Request $request, $id){
        $obj = Aluno::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $regras = [
            'nome' => 'required|max:100|min:10',
            'curso' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);
        
        $obj->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'curso_id' => $request->curso
        ]);

        $obj->save();

        return redirect()->route('alunos.index');
    }

    public function destroy($id){
        $obj = Aluno::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $obj->destroy($id);

        return redirect()->route('alunos.index');
    }
}
