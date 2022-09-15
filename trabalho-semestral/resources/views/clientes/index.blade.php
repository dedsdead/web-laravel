@extends('templates.main', ['titulo' => "Clientes", 'rota' => "clientes.create"])
@section('titulo') Clientes @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Clientes'"
                :crud="'clientes'" 
                :header="['NOME', 'TELEFONE', 'ENDERECO', 'AÇÕES']"
                :fields="['nome', 'telefone', 'endereco']" 
                :data="$dados"
                :hide="[false, false, true, false]"
                :info="['nome', 'codigo_tipo', 'codigo_caracteristica']"
                :remove="'nome'"
                :list="$propriedades"
            />
        </div>
    </div>
@endsection