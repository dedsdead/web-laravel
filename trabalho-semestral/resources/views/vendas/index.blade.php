@extends('templates.main', ['titulo' => "Vendas", 'rota' => "vendas.create"])
@section('titulo') Vendas @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Vendas'"
                :crud="'vendas'" 
                :header="['PROPRIEDADE', 'CLIENTE', 'DATA', 'AÇÕES']"
                :fields="['codigo_propriedade', 'id_comprador', 'data_venda']" 
                :data="$dados"
                :hide="[true, false, false, false]"
                :info="['nome_proprietario', 'id_comprador', 'valor_venda']"
                :remove="'codigo_propriedade'"
            />
        </div>
    </div>
@endsection