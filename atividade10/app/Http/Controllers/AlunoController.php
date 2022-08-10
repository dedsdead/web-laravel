<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller{
    public function index(){
        if(!PermissionController::isAuthorized('alunos.index')){
            return view('permissoes.denied');
        }

        $permissions = session('user_permissions');
        
        return view('alunos.index', compact('permissions'));
    }

    public function create(){
        if(!PermissionController::isAuthorized('alunos.create')){
            return view('permissoes.denied');
        }

        return view('alunos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        if(!PermissionController::isAuthorized('alunos.show')){
            return view('permissoes.denied');
        }

        return view('alunos.show');
    }

    public function edit($id){
        if(!PermissionController::isAuthorized('alunos.edit')){
            return view('permissoes.denied');
        }

        return view('alunos.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        if(!PermissionController::isAuthorized('alunos.destroy')){
            return view('permissoes.denied');
        }

        return view('alunos.destroy');
    }
}
