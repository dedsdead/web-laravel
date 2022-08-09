<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Eixo;
use Illuminate\Http\Request;

class CursoController extends Controller{
    public function index(){
        $dados = Curso::all();

        return view('cursos.index', compact('dados'));
    }

    public function create(){
        $eixos = Eixo::all();

        return view('cursos.create', compact('eixos'));
    }

    public function store(Request $request){
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

    public function show($id){
        //
    }

    public function edit($id){
        $dados = Curso::find($id);
        $eixos = Eixo::all();
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('cursos.edit', compact('dados', 'eixos'));
    }

    public function update(Request $request, $id){
        $obj = Curso::find($id);

        if(!isset($obj)) { return view('erros.id'); }

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
        
        $obj->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),
            'sigla' => mb_strtoupper($request->sigla, 'UTF-8'),
            'tempo' => $request->tempo,
            'eixo_id' => $request->eixo
        ]);

        $obj->save();

        return redirect()->route('cursos.index');
    }

    public function destroy($id){
        $obj = Curso::find($id);

        if(!isset($obj)) { return view('erros.id'); }

        $obj->destroy($id);

        return redirect()->route('cursos.index');
    }
}
