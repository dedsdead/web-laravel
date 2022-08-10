<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller{
    public function index(){
        if(!PermissionController::isAuthorized('disciplinas.index')){
            return view('permissoes.denied');
        }
        
        $permissions = session('user_permissions');
        
        return view('disciplinas.index', compact('permissions'));
    }

    public function create(){
        if(!PermissionController::isAuthorized('disciplinas.create')){
            return view('permissoes.denied');
        }
        
        return view('disciplinas.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        if(!PermissionController::isAuthorized('disciplinas.show')){
            return view('permissoes.denied');
        }
        
        return view('disciplinas.show');
    }

    public function edit($id){
        if(!PermissionController::isAuthorized('disciplinas.edit')){
            return view('permissoes.denied');
        }
        
        return view('disciplinas.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        if(!PermissionController::isAuthorized('disciplinas.destroy')){
            return view('permissoes.denied');
        }
        
        return view('disciplinas.destroy');
    }
}
