<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller{
    public function index(){
        return view('disciplinas.index');
    }

    public function create(){
        return view('disciplinas.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('disciplinas.show');
    }

    public function edit($id){
        return view('disciplinas.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        return view('disciplinas.destroy');
    }
}
