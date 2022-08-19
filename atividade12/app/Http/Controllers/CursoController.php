<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Eixo;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class CursoController extends Controller{
    public function index(){
        $this->authorize('viewAny', Curso::class);

        $dados = Curso::all();

        return view('cursos.index', compact('dados'));
    }

    public function create(){
        $this->authorize('create', Curso::class);

        $eixos = Eixo::all();

        return view('cursos.create', compact('eixos'));
    }

    public function store(Request $request){
        $this->authorize('create', Curso::class);

        $regras = [
            'nome' => 'required|max:50|min:10',
            'sigla' => 'required|max:8|min:2',
            'tempo' => 'required|max:2|min:1',
            'eixo' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);

        $obj_eixo = Eixo::find($request->eixo);

        if(isset($obj_eixo)){
            $obj = new Curso();

            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $obj->sigla = mb_strtoupper($request->sigla, 'UTF-8');
            $obj->tempo = $request->tempo;
            $obj->eixo()->associate($obj_eixo);

            $obj->save();
        }
        

        return redirect()->route('cursos.index');
    }

    public function show(Curso $curso){
        $this->authorize('view', $curso);
    }

    public function edit(Curso $curso){
        $this->authorize('update', $curso);

        $dados = $curso;
        $eixos = Eixo::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('cursos.edit', compact('dados', 'eixos'));
    }

    public function update(Request $request, Curso $curso){
        $this->authorize('update', $curso);

        if(!isset($curso)) { return view('erros.id'); }

        $regras = [
            'nome' => 'required|max:50|min:10',
            'sigla' => 'required|max:8|min:2',
            'tempo' => 'required|max:2|min:1',
            'eixo' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);
        
        $curso->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'sigla' => mb_strtoupper($request->sigla, 'UTF-8'),
            'tempo' => $request->tempo,
            'eixo_id' => $request->eixo
        ]);

        $curso->save();

        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso){
        $this->authorize('delete', $curso);

        if(!isset($curso)) { return view('erros.id'); }

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
