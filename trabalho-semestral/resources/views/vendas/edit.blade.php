@extends('templates.main', ['titulo' => "Alterar Venda"])
@section('titulo') Vendas @endsection
@section('conteudo')
<form action="{{ route('vendas.update', $dados->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col" >
            <div class="input-group form-floating mb-3">
                <span class="input-group-text text-white" style="background-color: #154c79;">Propriedade a vender</span>
                <select class="form-select form-select-sm" aria-label="Propriedade" name="codigo_propriedade">
                <option selected></option>
                @foreach ($propriedades as $propriedade)
                    @if($propriedade->id == $dados->codigo_propriedade)
                        <option value="{{$propriedade->id}}" selected>{{$propriedade->nome}}</option>
                    @else
                        <option value="{{$propriedade->id}}">{{$propriedade->nome}}</option>
                    @endif
                @endforeach
                </select>
                @if($errors->has('codigo_propriedade'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('codigo_propriedade') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group form-floating mb-3">
                <span class="input-group-text text-white" style="background-color: #154c79;">Cliente comprador</span>
                <select class="form-select form-select-sm" aria-label="id_comprador" name="id_comprador">
                <option selected></option>
                @foreach ($clientes as $cliente)
                    @if($cliente->id == $dados->id_comprador)
                        <option value="{{$cliente->id}}" selected>{{$cliente->nome}}</option>
                    @else
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endif 
                @endforeach
                </select>
                @if($errors->has('cliente'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('cliente') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="data_venda" 
                        class="form-control @if($errors->has('data_venda')) is-invalid @endif" 
                        name="data_venda" 
                        placeholder="Data de venda"
                        value="{{$dados->data_venda}}"
                    />
                    <label for="data_venda">Data de venda</label>
                    @if($errors->has('data_venda'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('data_venda') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col" >
            <div class="form-floating mb-3">
                <input 
                    type="valor_venda" 
                    class="form-control @if($errors->has('valor_venda')) is-invalid @endif" 
                    name="valor_venda" 
                    placeholder="Valor de venda"
                    value="{{$dados->valor_venda}}"
                />
                <label for="valor_venda">Valor de venda</label>
                @if($errors->has('valor_venda'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('valor_venda') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('vendas.index')}}" class="btn btn-block align-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                </svg>
                &nbsp; Voltar
            </a>
            <button onclick="javascript:document.querySelector('form').submit();" class="btn btn-block align-content-center">
                Confirmar &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </button>
        </div>
    </div>
@endsection
