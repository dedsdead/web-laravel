<?php

use Illuminate\Support\Facades\Route;

use App\Models\Eixo;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Aluno;
use App\Models\Matricula;

Route::get('/', function () {
    return view('templates.main')->with('titulo', "");
})->name('index');


Route::resource('eixos', 'EixoController');

Route::resource('cursos', 'CursoController');

Route::resource('professores', 'ProfessorController');

Route::resource('disciplinas', 'DisciplinaController');

Route::resource('alunos', 'AlunoController');

Route::resource('vinculos', 'VinculoController');

Route::resource('matriculas', 'MatriculaController');

/*

Route::get('/eixos', function() {
    $obj = Eixo::with(['curso'])->get();

    return $obj->toJson();
});

Route::get('/cursos', function() {
    $obj = Curso::with(['eixo'])->get();

    return $obj->toJson();
});

Route::get('/professores', function() {
    $obj = Professor::with(['eixo'])->get();

    return $obj->toJson();
});

Route::get('/disciplinas/cursos', function() {
    $obj = Disciplina::with(['curso'])->get();

    return $obj->toJson();
});

Route::get('/disciplinas/professores', function() {
    $obj = Disciplina::with(['professor'])->get();

    return $obj->toJson();
});

Route::get('/alunos/cursos', function() {
    $obj = Aluno::with(['curso'])->get();

    return $obj->toJson();
});

Route::get('/matriculas', function() {
    $obj = Matricula::with(['aluno', 'disciplina'])->get();

    return $obj->toJson();
});

Route::get('/disciplinas/alunos',function() {
    $obj = Disciplina::with(['aluno'])->get();

    return $obj->toJson();

});
*/