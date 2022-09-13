<?php

namespace App\Http\Controllers;

use App\Models\Propriedade;
use Illuminate\Http\Request;

class PropriedadeController extends Controller{
    public function index(){
        $this->authorize('viewAny', Propriedade::class);
        $propriedades = Propriedade::all();

        return view('propriedades.index', compact('propriedades'));

    }

    public function create(){
        $this->authorize('create', Propriedade::class);

        return view('propriedades.create');

    }

    public function store(Request $request){
        $this->authorize('create', Propriedade::class);

    }

    public function show(Propriedade $propriedade){
        $this->authorize('view', $propriedade);

        return view('propriedades.show');

    }

    public function edit(Propriedade $propriedade){
        $this->authorize('update', $propriedade);

        return view('propriedades.edit');

    }

    public function update(Request $request, Propriedade $propriedade){
        $this->authorize('update', $propriedade);

    }

    public function destroy(Propriedade $propriedade){
        $this->authorize('delete', $propriedade);

        return view('propriedades.destroy');
        
    }
}
