<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

class Permissions{

    public function handle(Request $request, Closure $next){
        $nivel = 3;

        $route = Route::currentRouteName();
        $crud = explode('.', $route);

        if($nivel == 1){
            if($crud[0] != 'eixos' && $crud[0] != 'cursos'){
                return response()->view('permissoes.denied');
            } else { 
                if($crud[1] != 'index'){
                    return response()->view('permissoes.denied');
                }
            }

            return $next($request);
        } else if ($nivel == 2){
            if($crud[0] != 'eixos' && $crud[0] != 'cursos'){
                if($crud[1] != 'index'){
                    return response()->view('permissoes.denied');
                }
            } 

            return $next($request);
        }

        return $next($request);
    }
}
