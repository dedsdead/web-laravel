<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class MatriculaController extends Controller{
    public function index(){
        //
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $this->authorize('create', Matricula::class);

        $obj_aluno = Aluno::find($request->aluno);

        if(isset($obj_aluno)) {
            $obj_aluno->disciplina()->detach();

            foreach ($request->matricula as $matricula){
                $obj_disciplina = Disciplina::find($matricula);

                if(isset($obj_disciplina)){
                    $obj_matricula = new Matricula();
                    $descricao = "MANHA";
                    $obj_matricula->descricao = $descricao;
                    $obj_matricula->aluno()->associate($obj_aluno);
                    $obj_matricula->disciplina()->associate($obj_disciplina);
                    $obj_matricula->save();
                }
                
            }
        }

        return redirect()->route('alunos.index');
    }

    public function show($id){
        $this->authorize('view', $id);

        $matriculas = Matricula::all();
        
        $aluno = Aluno::where('id', $id)->get()->first();

        $curso = Curso::find($aluno->curso)->first();

        $dados = Disciplina::where('curso_id', $curso->id)->get();

        return view('matriculas.index', compact('dados', 'aluno', 'curso', 'matriculas'));
    }

    public function edit(Matricula $matricula){
        //
    }

    public function update(Request $request, Matricula $matricula){
        //
    }

    public function destroy(Matricula $matricula){
        //
    }
}
