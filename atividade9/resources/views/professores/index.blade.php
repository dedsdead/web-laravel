@extends('templates.main', ['titulo' => "Professores", 'rota' => "professores.create"])
@section('titulo') Professores @endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datalist
                :title="'Professores'"
                :crud="'professores'" 
                :header="['NOME', 'EIXO', 'STATUS', 'AÇÕES']"
                :fields="['nome', 'eixo_id', 'ativo']" 
                :data="$dados"
                :hide="[false, true, false, false]"
                :info="['nome', 'email', 'siape']"
                :list="$vinculos"
                :names="$disciplinas"
            />
        </div>
    </div>
@endsection