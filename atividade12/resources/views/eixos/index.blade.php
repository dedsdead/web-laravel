@extends('templates.main', ['titulo' => "Eixos", 'rota' => "eixos.create"])
@section('titulo') Eixos @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Eixos e Áreas'"
                :crud="'eixos'" 
                :header="['NOME','AÇÕES']"
                :fields="['nome']" 
                :data="$dados"
                :hide="[false, false]"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection