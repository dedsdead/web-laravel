@extends('templates.main', ['titulo' => "Docencia (2022)", 'rota' => "vinculos.index"])
@section('titulo') Disciplinas e Professores @endsection
@section('conteudo')
    <table class="table caption-top">
    <caption>Tabela de <b>Disciplinas/Professores</b></caption>
    <thead>
        <tr>
            <th scope="col">Disciplina</th>
            <th scope="col">Professor</th>
        </tr>
    </thead>
    <form action="{{ route('vinculos.store') }}" method="POST">
        @csrf
        <tbody>
        @foreach ($dados as $item)
        <tr>
            <td>
                <input 
                    type="text" 
                    class="form-control" 
                    name="nome" 
                    placeholder="Nome"
                    value="{{$item->nome}}"
                    readonly
                >
            </td>
            <td>
                <select class="form-select" aria-label="Professor" name="professor[]" required>
                    @foreach($professores as $professor)
                        @php $flag = 0; @endphp
                        @foreach($vinculos as $vinculo)
                            @if($professor->id == $vinculo->professor_id && $item->id == $vinculo->disciplina_id)
                                @php $flag = 1; @endphp
                            @endif
                        @endforeach
                        @if($flag == 1)
                            <option selected value="{{$item->nome}}_{{$professor->id}}">{{$professor->nome}}</option>
                        @else
                            <option value="{{$item->nome}}_{{$professor->id}}">{{$professor->nome}}</option>
                        @endif
                    @endforeach
                </select>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <div class="row">
            <div class="col">
                <a href="{{route('index')}}" class="btn btn-block align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Cancelar
                </a>
                @isset($dados[0])
                <a href="javascript:document.querySelector('form').submit();" class="btn btn-block align-content-center">
                    Confirmar &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                </a>
                @endisset
            </div>
        </div>
    </form>
@endsection