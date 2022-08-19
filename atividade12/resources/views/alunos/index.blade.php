@extends('templates.main', ['titulo' => "Alunos", 'rota' => "alunos.create"])
@section('titulo') Alunos @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Alunos'"
                :crud="'alunos'" 
                :header="['ALUNO', 'AÇÕES']"
                :fields="['nome']" 
                :data="$dados"
                :hide="[false, false]"
                :info="['nome', 'curso_id']"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection