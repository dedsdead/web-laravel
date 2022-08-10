<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EixoController extends Controller{
    public function index(){
        if(!PermissionController::isAuthorized('eixos.index')){
            return view('permissoes.denied');
        }
        
        $permissions = session('user_permissions');
        
        return view('eixos.index', compact('permissions'));
    }

    public function create(){
        if(!PermissionController::isAuthorized('eixos.create')){
            return view('permissoes.denied');
        }
        
        return view('eixos.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        if(!PermissionController::isAuthorized('eixos.show')){
            return view('permissoes.denied');
        }
        
        return view('eixos.show');
    }

    public function edit($id){
        if(!PermissionController::isAuthorized('eixos.edit')){
            return view('permissoes.denied');
        }
        
        return view('eixos.edit');

    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        if(!PermissionController::isAuthorized('eixos.destroy')){
            return view('permissoes.denied');
        }
        
        return view('eixos.destroy');

    }
}
