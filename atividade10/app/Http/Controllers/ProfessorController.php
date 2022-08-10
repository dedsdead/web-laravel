<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller{
    public function index(){
        if(!PermissionController::isAuthorized('professores.index')){
            return view('permissoes.denied');
        }
        
        $permissions = session('user_permissions');
        
        return view('professores.index', compact('permissions'));

    }

    public function create(){
        if(!PermissionController::isAuthorized('professores.create')){
            return view('permissoes.denied');
        }
        
        return view('professores.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        if(!PermissionController::isAuthorized('professores.show')){
            return view('permissoes.denied');
        }
        
        return view('professores.show');
    }

    public function edit($id){
        if(!PermissionController::isAuthorized('professores.edit')){
            return view('permissoes.denied');
        }
        
        return view('professores.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        if(!PermissionController::isAuthorized('professores.destroy')){
            return view('permissoes.denied');
        }
        
        return view('professores.destroy');
    }
}
