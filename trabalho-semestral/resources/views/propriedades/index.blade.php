@extends('templates.main', ['titulo' => "Propriedades", 'rota' => "propriedades.create"])
@section('titulo') Propriedades @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Propriedades'"
                :crud="'propriedades'" 
                :header="['NOME', 'TIPO', 'METRAGEM', 'AÇÕES']"
                :fields="['nome', 'tipo_id', 'metragem']" 
                :data="$dados"
                :hide="[true, false, false, false]"
                :info="['nome', 'caracteristica_id', 'descricao', 'endereco']"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection