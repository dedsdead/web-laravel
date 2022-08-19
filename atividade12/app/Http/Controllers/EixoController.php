<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class EixoController extends Controller{
    public function index(){
        $this->authorize('viewAny', Eixo::class);

        $dados = Eixo::all();

        return view('eixos.index', compact('dados'));
    }

    public function create(){
        $this->authorize('create', Eixo::class);

        return view('eixos.create');
    }

    public function store(Request $request){
        $this->authorize('create', Eixo::class);

        $regras = [
            'nome' => 'required|max:50|min:10'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);

        Eixo::create([
            'nome' => mb_strtoupper($request->nome, 'UTF-8')
        ]);

        return redirect()->route('eixos.index');
    }

    public function show(Eixo $eixo){
        $this->authorize('view', $eixo);
    }

    public function edit(Eixo $eixo){
        $this->authorize('update', $eixo);

        $dados = $eixo;
        
        if(!isset($dados)) { return view('erros.id'); }

        return view('eixos.edit', compact('dados'));
    }

    public function update(Request $request, Eixo $eixo){
        $this->authorize('update', $eixo);

        if(!isset($eixo)) { return view('erros.id'); }

        $regras = [
            'nome' => 'required|max:50|min:10'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo [:attribute] é obrigatório!',
            'max' => 'O campo [:attribute] possui um tamanho máximo de [:max]',
            'min' => 'O  campo [:attribute] possui um tamanho mínimo de [:min]'
        ];

        $request->validate($regras, $msgs);
        
        $eixo->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8')
        ]);

        $eixo->save();

        return redirect()->route('eixos.index');
    }

    public function destroy(Eixo $eixo){
        $this->authorize('delete', $eixo);

        if(!isset($eixo)) { return view('erros.id'); }

        $eixo->delete();

        return redirect()->route('eixos.index');
    }
}
