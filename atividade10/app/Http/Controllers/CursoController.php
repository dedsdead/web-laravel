<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('cursos.show');
    }

    public function edit($id){
        return view('cursos.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        return view('cursos.destroy');
    }
}
