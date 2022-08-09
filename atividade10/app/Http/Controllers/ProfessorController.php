<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller{
    public function index(){
        return view('professores.index');

    }

    public function create(){
        return view('professores.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('professores.show');
    }

    public function edit($id){
        return view('professores.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        return view('professores.destroy');
    }
}
