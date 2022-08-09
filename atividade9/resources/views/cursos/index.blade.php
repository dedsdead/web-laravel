@extends('templates.main', ['titulo' => "Cursos", 'rota' => "cursos.create"])
@section('titulo') Cursos @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Cursos'"
                :crud="'cursos'" 
                :header="['NOME', 'SIGLA', 'AÇÕES']"
                :fields="['nome', 'sigla']" 
                :data="$dados"
                :hide="[false, true, false]"
                :info="['nome', 'sigla']"
                :remove="'sigla'"
            />
        </div>
    </div>
@endsection