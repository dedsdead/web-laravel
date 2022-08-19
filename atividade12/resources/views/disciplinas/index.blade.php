@extends('templates.main', ['titulo' => "Disciplinas", 'rota' => "disciplinas.create"])
@section('titulo') Disciplinas @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Disciplinas (2022)'"
                :crud="'disciplinas'" 
                :header="['NOME', 'CURSO', 'AÇÕES']"
                :fields="['nome', 'curso_id']" 
                :data="$dados"
                :hide="[false, false, false]"
                :info="['nome', 'carga',]"
                :remove="'nome'"
                :list="$vinculos"
                :names="$professores"
            />
        </div>
    </div>
@endsection