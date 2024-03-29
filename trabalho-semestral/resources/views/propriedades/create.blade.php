@extends('templates.main', ['titulo' => "Nova Propriedade"])
@section('titulo') Propriedades @endsection
@section('conteudo')
    <form action="{{ route('propriedades.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col" >
                <div class="input-group form-floating mb-3">
                    <span class="input-group-text text-white" style="background-color: #154c79;">Tipo de Imovel</span>
                    <select class="form-select form-select-sm" aria-label="Tipo" name="codigo_tipo">
                    @foreach ($tipos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('codigo_tipo'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('codigo_tipo') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="input-group form-floating mb-3">
                    <span class="input-group-text text-white" style="background-color: #154c79;">Caracteristicas do Imovel (opcional)</span>
                    <select class="form-select form-select-sm" aria-label="Caracteristica" name="codigo_caracteristica">
                    <option selected></option>
                    @foreach ($caracteristicas as $caracteristica)
                        <option value="{{$caracteristica->id}}">{{$caracteristica->nome}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('codigo_caracteristica'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('codigo_caracteristica') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="input-group form-floating mb-3">
                    <span class="input-group-text text-white" style="background-color: #154c79;">Cliente (opcional)</span>
                    <select class="form-select form-select-sm" aria-label="id_cliente" name="id_cliente">
                    <option selected></option>
                    @foreach ($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
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
                    <textarea
                        id="descricao"
                        name="descricao" 
                        class="form-control @if($errors->has('descricao')) is-invalid @endif"
                        rows="5"
                    >{{old('descricao')}}</textarea>
                    <label for="descricao">Descricao da Propriedade</label>
                    @if($errors->has('descricao'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('descricao') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="metragem" 
                        class="form-control @if($errors->has('metragem')) is-invalid @endif" 
                        name="metragem" 
                        placeholder="Metragem da Propriedade"
                        value="{{old('metragem')}}"
                    />
                    <label for="metragem">Metragem da Propriedade (m²)</label> 
                    @if($errors->has('metragem'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('metragem') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="matricula" 
                        class="form-control @if($errors->has('matricula')) is-invalid @endif" 
                        name="matricula" 
                        placeholder="Matricula da Propriedade"
                        value="{{old('matricula')}}"
                    />
                    <label for="matricula">Matricula da Propriedade (opcional)</label>
                    @if($errors->has('matricula'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('matricula') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                <textarea 
                        id="endereco"
                        name="endereco"
                        class="form-control @if($errors->has('endereco')) is-invalid @endif"
                        rows="5"
                    >{{old('endereco')}}</textarea>
                    <label for="endereco">Endereço da Propriedade</label>
                    @if($errors->has('endereco'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('endereco') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{route('propriedades.index')}}" class="btn btn-block align-content-center">
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
    </form>
@endsection