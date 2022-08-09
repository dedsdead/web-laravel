<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller{
    public function index(){
        return view('alunos.index');
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('alunos.show');
    }

    public function edit($id){
        return view('alunos.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        return view('alunos.destroy');
    }
}
