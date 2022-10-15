@extends('templates.main', ['titulo' => "Propriedades", 'rota' => "propriedades.create"])
@section('titulo') Propriedades @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Propriedades'"
                :crud="'propriedades'" 
                :header="['TIPO', 'METRAGEM', 'AÇÕES']"
                :fields="['codigo_tipo', 'metragem']" 
                :data="$dados"
                :hide="[true, false, false, false]"
                :info="['codigo_caracteristica', 'descricao', 'endereco']"
                :remove="'descricao'"
                :names="$clientes"
            />
        </div>
    </div>
@endsection