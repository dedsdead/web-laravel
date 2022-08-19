<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class AlunoController extends Controller{
    public function index(){
        $this->authorize('viewAny', Aluno::class);

        $dados = Aluno::with(['disciplina'])->get();

        foreach ($dados as $dado) {
            $aux = Curso::find($dado['curso_id']);
            $dado['curso_id'] = $aux->nome;
        }

        return view('alunos.index', compact('dados'));
    }

    public function create(){
        $this->authorize('create', Aluno::class);

        $cursos = Curso::all();

        return view('alunos.create', compact('cursos'));
    }

    public function store(Request $request){
        $this->authorize('create', Aluno::class);

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

    public function show(Aluno $aluno){
        $this->authorize('view', $aluno);
    }

    public function edit(Aluno $aluno){
        $this->authorize('update', $aluno);

        $dados = $aluno;
        $cursos = Curso::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('alunos.edit', compact('dados', 'cursos'));
    }

    public function update(Request $request, Aluno $aluno){
        $this->authorize('update', $aluno);

        if(!isset($aluno)) { return view('erros.id'); }

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
        
        $aluno->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'curso_id' => $request->curso
        ]);

        $aluno->save();

        return redirect()->route('alunos.index');
    }

    public function destroy(Aluno $aluno){
        $this->authorize('delete', $aluno);

        if(!isset($aluno)) { return view('erros.id'); }

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
