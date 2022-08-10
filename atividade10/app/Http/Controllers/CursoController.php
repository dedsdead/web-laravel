<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller{
    public function index(){
        if(!PermissionController::isAuthorized('cursos.index')){
            return view('permissoes.denied');
        }

        $permissions = session('user_permissions');
        
        return view('cursos.index', compact('permissions'));
    }

    public function create(){
        if(!PermissionController::isAuthorized('cursos.create')){
            return view('permissoes.denied');
        }
        
        return view('cursos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        if(!PermissionController::isAuthorized('cursos.show')){
            return view('permissoes.denied');
        }
        
        return view('cursos.show');
    }

    public function edit($id){
        if(!PermissionController::isAuthorized('cursos.edit')){
            return view('permissoes.denied');
        }
        
        return view('cursos.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        if(!PermissionController::isAuthorized('cursos.destroy')){
            return view('permissoes.denied');
        }
        
        return view('cursos.destroy');
    }
}
