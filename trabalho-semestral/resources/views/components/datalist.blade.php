<div> 
    <table class="table table-secondary align-middle caption-top table-striped">
        <caption>Tabela de <b>{{ $title }}</b></caption>
        <thead>
        <tr>
            @php $cont=0; @endphp
            @foreach ($header as $item)

                @if($hide[$cont])
                    <th scope="col" class="d-none d-md-table-cell">{{ $item }}</th>
                @else
                    <th scope="col">{{ $item }}</th>
                @endif
                @php $cont++; @endphp

            @endforeach
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    @php $cont=0; @endphp
                    @foreach($fields as $field)
                        @if($hide[$cont])
                            <td class="d-none d-md-table-cell">{{ $item[$field] }}</td>
                        @else
                            <td>{{ $item[$field] }}</td>
                        @endif
                        @php $cont=0; @endphp
                    @endforeach
                    <td>
                        @can('update', $item)
                            <a href= "{{route($crud.'.edit', $item['id']) }}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill-rule="evenodd" d="M17.263 2.177a1.75 1.75 0 012.474 0l2.586 2.586a1.75 1.75 0 010 2.474L19.53 10.03l-.012.013L8.69 20.378a1.75 1.75 0 01-.699.409l-5.523 1.68a.75.75 0 01-.935-.935l1.673-5.5a1.75 1.75 0 01.466-.756L14.476 4.963l2.787-2.786zm-2.275 4.371l-10.28 9.813a.25.25 0 00-.067.108l-1.264 4.154 4.177-1.271a.25.25 0 00.1-.059l10.273-9.806-2.94-2.939zM19 8.44l2.263-2.262a.25.25 0 000-.354l-2.586-2.586a.25.25 0 00-.354 0L16.061 5.5 19 8.44z">
                                </path>
                            </svg>
                            </a>
                        @endcan
                        @can('view', $item)
                            <a nohref style="cursor:pointer" onclick="showInfoModal('{{ $item }}', '{{ json_encode($info) }}')" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path d="M13 7.5a1 1 0 11-2 0 1 1 0 012 0zm-3 3.75a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v4.25h.75a.75.75 0 010 1.5h-3a.75.75 0 010-1.5h.75V12h-.75a.75.75 0 01-.75-.75z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z">
                                    </path>
                                </svg>
                            </a>
                        @endcan
                        <!-- AQUI ESTAVA PERSON E LIST -->
                        @can('delete', $item)
                            <a nohref style="cursor:pointer" onclick="showRemoveModal('{{ $item->id }}', '{{ json_encode($item->$remove) }}')" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z">
                                    </path>
                                </svg>
                            </a>
                        @endcan
                    </td>
                    <form action="{{route($crud.'.destroy', $item['id']) }}" method="POST" id="form_{{$item['id']}}">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>