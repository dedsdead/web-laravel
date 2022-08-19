<?php

namespace App\Http\Controllers;

use App\Models\Vinculo;
use App\Models\Professor;
use App\Models\Disciplina;
use Illuminate\Http\Request;

use App\Facades\UserPermissions;

class VinculoController extends Controller{
    public function index(){
        $this->authorize('viewAny', Vinculo::class);

        $vinculos = Vinculo::all();

        $dados = Disciplina::all();

        $professores = Professor::where('ativo', 1)->get();

        return view('vinculos.index', compact('dados', 'professores', 'vinculos'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $this->authorize('create', Vinculo::class);

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

    public function show(Vinculo $vinculo){
        //
    }

    public function edit(Vinculo $vinculo){
        //
    }

    public function update(Request $request, Vinculo $vinculo){
        //
    }

    public function destroy(Vinculo $vinculo){
        //
    }
}
