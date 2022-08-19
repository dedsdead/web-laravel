<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Vinculo;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class DisciplinaController extends Controller{
    public function index(){
        $this->authorize('viewAny', Disciplina::class);

        $dados = Disciplina::all();
        $cursos = Curso::all();
        $vinculos = Vinculo::all();
        $professores = Professor::all();

        foreach ($dados as $value) {
            if(isset($cursos)){
                $aux = Curso::find($value['curso_id']);
                if(isset($aux)){
                    $value['curso_id'] = $aux->nome;
                }
                
            }
            
        }

        return view('disciplinas.index', compact('dados', 'vinculos', 'professores'));
    }

    public function create(){
        $this->authorize('create', Disciplina::class);
        
        $cursos = Curso::all();

        return view('disciplinas.create', compact('cursos'));
    }

    public function store(Request $request){
        $this->authorize('create', Disciplina::class);

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

    public function show(Disciplina $disciplina){
        $this->authorize('view', $disciplina);
    }

    public function edit(Disciplina $disciplina){
        $this->authorize('update', $disciplina);

        $dados = $disciplina;
        $cursos = Curso::all();

        if(!isset($dados)) { return view('erros.id'); }

        return view('disciplinas.edit', compact('dados', 'cursos'));
    }

    public function update(Request $request, Disciplina $disciplina){
        $this->authorize('update', $disciplina);

        if(!isset($disciplina)) { return view('erros.id'); }

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

        $disciplina->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'curso_id' => $request->curso,
            'carga' => $request->carga
        ]);

        $disciplina->save();

        return redirect()->route('disciplinas.index');
    }

    public function destroy(Disciplina $disciplina){
        $this->authorize('delete', $disciplina);

        if(!isset($disciplina)) { return view('erros.id'); }

        $disciplina->delete();

        return redirect()->route('disciplinas.index');
    }
}
