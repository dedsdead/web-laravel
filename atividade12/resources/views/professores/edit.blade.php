@extends('templates.main', ['titulo' => "Alterar Professor"])
@section('titulo') Professores @endsection
@section('conteudo')
<form action="{{ route('professores.update', $dados->id) }}" method="POST">
    @csrf
    @method('PUT')
    @php $ativo=0; @endphp
    <div class="form-check form-switch">
        <input type="hidden" name="ativo" id="ativo" value="0"/>
        <input class="form-check-input" type="checkbox" name="ativo" id="ativo" value=1 checked />
        <label class="form-check-label" for="ativo">Ativo</label>
        @if($errors->has('ativo'))
            <div class='invalid-feedback'>
                {{ $errors->first('ativo') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col" >
            <div class="form-floating mb-3">
                <input 
                    type="text" 
                    class="form-control @if($errors->has('nome')) is-invalid @endif" 
                    name="nome" 
                    placeholder="Nome"
                    value="{{$dados->nome}}"
                />
                <label for="nome">Nome do Professor</label>
                @if($errors->has('nome'))
                <div class='invalid-feedback'>
                    {{ $errors->first('nome') }}
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group">
                <span class="input-group-text text-white" style="background-color: #154c79;">Eixo</span>
                <select class="form-select form-select-sm" aria-label="Eixo" name="eixo" required>
                @foreach ($eixos as $eixo)
                    <option value="{{$eixo->id}}">{{$eixo->nome}}</option>
                @endforeach
                </select>
                @if($errors->has('eixo'))
                <div class='invalid-feedback'>
                    {{ $errors->first('eixo') }}
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('professores.index')}}" class="btn btn-block align-content-center">
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
