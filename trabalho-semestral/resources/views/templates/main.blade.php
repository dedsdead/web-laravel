<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SisGI - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-light" style="background-color: #154c79;">
            <div class="container-fluid">
                <a href="{{route('dashboard')}}" class="navbar-brand ms-sm-3">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFF" viewBox="0 0 640 512">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z"/>
                </svg>

                <span class="ms-3 fs-5 text-white">SisGI</span>
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
                                <li><a href="{{route('clientes.index')}}" class="dropdown-item">Clientes</a></li>
                                <li><a href="{{route('propriedades.index')}}" class="dropdown-item">Propriedades</a></li>
                                @can('viewAny', "App\Model\Venda")
                                    <li><a href="{{route('vendas.index')}}" class="dropdown-item">Vendas</a></li>
                                @endcan
                            </ul>
                        </li>
                        <li class="nav-item ps-2 me-3">
                            <form method="POST" action="{{ route('logout') }}" id="form">
                                @csrf  
                                <a nohref style="cursor:pointer" class="nav-link" onclick="document.getElementById('form').submit()">  
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    <span class="ps-1 text-white">Sair</span>
                                </a>
                            </form>
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
                        @if($rota != 'vendas.index')
                            @php $param=substr($titulo, 0, -1); @endphp
                            @can('create', "App\Model\\$param")
                                <a href= "{{ route($rota) }}" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </a>
                            @endcan
                        @endif
                    </div>
                @endif
            </div>
            <hr>
            <div id="content">
                @yield('conteudo')
                &nbsp;
            </div>
        </div>
    </body>

    <footer>
        <nav class="navbar fixed-bottom navbar-light" style="background-color: #154c79;">
            <div class="container-fluid">
                <span class="text-white fw-light">@ Instituto Federal do Parana</span>
            </div>
        </nav>
    </footer>

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
    <div class="modal fade" tabindex="-1" id="personModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Cliente Proprietario</h5>
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
    <div class="modal fade" tabindex="-1" id="listModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Propriedades Possuidas</h5>
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
                if(data[fields[a]] != null)
                    $('#infoModal').modal().find('.modal-body').append("<b>" + fields[a].toUpperCase() + "</b> - <b class='text-primary'>'" + data[fields[a]] + "'</b><br>");
            }
            $("#infoModal").modal('show');
        }
        function closeInfoModal() {
            $("#infoModal").modal('hide');
        }
        function showPersonModal(id, names) {
            names = JSON.parse(names);
            $('#personModal').modal().find('.modal-body').html("");

            $.each(names, function(key, data) {
                
                if(id == data['id'])
                    $('#personModal').modal().find('.modal-body').append("<b> PROPRIETARIO - </b><b class='text-primary'> '" + data['nome'] + "'</b><br>");
            });
                
            $("#personModal").modal('show');
        }
        function closePersonModal() {
            $("#personModal").modal('hide');
        }
        function showListModal(id, list) {
            list = JSON.parse(list);
            $('#listModal').modal().find('.modal-body').html("");

            $.each(list, function(key, data) {
                
                if(id == data['id_cliente'])
                    $('#listModal').modal().find('.modal-body').append("<b> PROPRIEDADE - </b><b class='text-primary'> '" + data['descricao'] + "'</b><br>");
            });
                
            $("#listModal").modal('show');
        }
        function closeListModal() {
            $("#listModal").modal('hide');
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