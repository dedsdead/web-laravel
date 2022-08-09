<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SisPDC - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-light" style="background-color: #154c79;">
            <div class="container-fluid">
                <a href="{{route('index')}}" class="navbar-brand ms-sm-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFF" class="bi bi-mortarboard" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                </svg>
                <span class="ms-3 fs-5 text-white">SisPDC</span>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#itens">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFF" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
                        <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="itens">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown ps-2">
                            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#FFF">
                                <path d="M18.5 16.44V6.75a.75.75 0 00-1.5 0v9.69l-2.22-2.22a.75.75 0 10-1.06 1.06l3.5 3.5a.75.75 0 001.06 0l3.5-3.5a.75.75 0 10-1.06-1.06l-2.22 2.22zM2 7.25a.75.75 0 01.75-.75h9.5a.75.75 0 010 1.5h-9.5A.75.75 0 012 7.25zm0 5a.75.75 0 01.75-.75h5.5a.75.75 0 010 1.5h-5.5a.75.75 0 01-.75-.75zm0 5a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75z">

                                </path>
                            </svg>
                                <span class="ps-1 text-white">Menu</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('eixos.index')}}" class="dropdown-item">Eixos</a></li>
                                <li><a href="{{route('cursos.index')}}" class="dropdown-item">Cursos</a></li>
                                <li><a href="{{route('professores.index')}}" class="dropdown-item">Professores</a></li>
                                <li><a href="{{route('disciplinas.index')}}" class="dropdown-item">Disciplinas</a></li>
                                <li><a href="{{route('alunos.index')}}" class="dropdown-item">Alunos</a></li>
                                <li><a href="{{route('vinculos.index')}}" class="dropdown-item">Vinculos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ps-2 me-3">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                <span class="ps-1 text-white">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <h3 class="display-7 text-secondary d-none d-md-block"><b>{{ $titulo }}</b></h3>
                </div>
                @if(isset($rota))
                    <div class="col d-flex justify-content-end">
                        @if($rota != 'vinculos.index' && $rota != 'matriculas.index')
                        <a href= "{{ route($rota) }}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        </a>
                        @endif
                    </div>
                @endif
            </div>
            <hr>
            @yield('conteudo')
        </div>
        <nav class="navbar fixed-bottom navbar-light" style="background-color: #154c79;">
            <div class="container-fluid">
                <span class="text-white fw-light">Instituto Federal do Parana</span>
            </div>
        </nav>
    </body>

    <div class="modal fade" tabindex="-1" id="infoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Mais Informações</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="infoModal" onclick="closeInfoModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body text-secondary">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block align-content-center" onclick="closeInfoModal()">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="listModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Disciplinas Vinculadas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="listModal" onclick="closeListModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body text-secondary">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block align-content-center" onclick="closeListModal()">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="personModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Professor Vinculado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="personModal" onclick="closePersonModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body text-secondary">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block align-content-center" onclick="closePersonModal()">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" tabindex="-1" id="removeModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary">Operação de Remoção</h5>
              <button type="button" class="btn-close" data-bs-dismiss="removeModal" onclick="closeRemoveModal()" aria-label="Close"></button>
            </div>
            <input type="hidden" id="id_remove">
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block align-content-center" onclick="closeRemoveModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Não
                </button>
              <button type="button" class="btn btn-primary" onclick="remove()">
                    Sim &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
              </button>
            </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap 5 / JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery / JS -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript">

        function showInfoModal(data, fields) {
            data = JSON.parse(data)
            fields = JSON.parse(fields)

            $('#infoModal').modal().find('.modal-body').html("");
            
            for(let a=0; a< fields.length; a++) {
                $('#infoModal').modal().find('.modal-body').append("<b>" + fields[a].toUpperCase() + " - " + data[fields[a]] + "</b><br>");
            }
            $("#infoModal").modal('show');
        }

        function closeInfoModal() {
            $("#infoModal").modal('hide');
        }

        function showListModal(id, list, names) {
            list = JSON.parse(list);
            names = JSON.parse(names);

            $('#listModal').modal().find('.modal-body').html("");

            $.each(list, function(index, value) {
                if(value['professor_id'] == id){
                    $.each(names, function(key, data) {
                        if(value['disciplina_id'] == data['id'])
                            $('#listModal').modal().find('.modal-body').append("<b> DISCIPLINA - " + data['nome'] + "</b><br>");
                    });
                }
            });

            $("#listModal").modal('show');
        }

        function closeListModal() {
            $("#listModal").modal('hide');
        }

        function showPersonModal(id, list, names) {
            list = JSON.parse(list);
            names = JSON.parse(names);

            $('#personModal').modal().find('.modal-body').html("");

            $.each(list, function(index, value) {
                if(value['disciplina_id'] == id){
                    $.each(names, function(key, data) {
                        if(value['professor_id'] == data['id'])
                            $('#personModal').modal().find('.modal-body').append("<b> NOME - " + data['nome'] + "</b><br>");
                    });
                }
            });

            $("#personModal").modal('show');
        }

        function closePersonModal() {
            $("#personModal").modal('hide');
        }

        function showRemoveModal(id, remove) {
            remove = JSON.parse(remove)
            $('#id_remove').val(id);
            $('#removeModal').modal().find('.modal-body').html("");
            $('#removeModal').modal().find('.modal-body').append("Deseja remover o registro <b class='text-primary'>'"+remove+"'</b> ?");
            $("#removeModal").modal('show');
        }

        function closeRemoveModal() {
            $("#removeModal").modal('hide');
        }

        function remove() {
            let id = $('#id_remove').val();
            let form = "form_" + $('#id_remove').val();
            document.getElementById(form).submit();
            $("#removeModal").modal('hide')
        }
    </script>

    @yield('script')
</html>