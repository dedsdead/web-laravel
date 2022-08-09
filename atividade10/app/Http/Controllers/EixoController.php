<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EixoController extends Controller{
    public function index(){
        return view('eixos.index');
    }

    public function create(){
        return view('eixos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('eixos.show');
    }

    public function edit($id){
        return view('eixos.edit');

    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        return view('eixos.destroy');

    }
}
