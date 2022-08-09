<?php

namespace App\Http\Controllers;

use App\Models\Vinculo;
use App\Models\Professor;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class VinculoController extends Controller{
    public function index(){
        $vinculos = Vinculo::all();

        $dados = Disciplina::all();

        $professores = Professor::where('ativo', 1)->get();

        return view('vinculos.index', compact('dados', 'professores', 'vinculos'));
        

    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $vinculos = Vinculo::all();

        foreach ($vinculos as $vinculo) {
            $vinculo->destroy($vinculo->id);
        }

        foreach ($request->professor as $professor) {
            $campo = explode("_", $professor);
            $disciplina = Disciplina::where('nome', $campo[0])->get()->first();

            Vinculo::create([
                'professor_id' => $campo[1],
                'disciplina_id' => $disciplina->id
            ]);

        }

        return redirect()->route('vinculos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id)
    {
        //
    }
}
