<?php

use Illuminate\Support\Facades\Route;

use App\Models\Eixo;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Aluno;
use App\Models\Matricula;
use App\Models\Vinculo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('templates.main')->with('titulo', "");
})->middleware(['auth'])->name('dashboard');

Route::resource('eixos', 'EixoController')->middleware(['auth']);

Route::resource('cursos', 'CursoController')->middleware(['auth']);

Route::resource('professores', 'ProfessorController')->middleware(['auth']);

Route::resource('disciplinas', 'DisciplinaController')->middleware(['auth']);

Route::resource('alunos', 'AlunoController')->middleware(['auth']);

Route::resource('vinculos', 'VinculoController')->middleware(['auth']);

Route::resource('matriculas', 'MatriculaController')->middleware(['auth']);

require __DIR__.'/auth.php';
