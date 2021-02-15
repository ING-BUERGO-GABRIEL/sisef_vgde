@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Plagas</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('plaga/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Clima</th>
                        <th>Descripción</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($plaga as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre}}</td>
                        <td>{{$data->clima}}</td>
                        <td>{{$data->descripcion}}</td>
                        <td>
                        <form id="eliminar{{$data->id}}" action="{{ url('/plaga/delete/'.$data->id) }}" method="post">
                                @csrf
                                <a href="{{url('plaga/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar({{ $data->id }})" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>                   
                </table>
                <div class="pagination justify-content-start mt-2">
                    @if ($plaga->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($plaga->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($plaga->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $plaga->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $plaga->lastPage(); $i++)
                                <li class="page-item {{ ($plaga->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($plaga->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $plaga->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($plaga->currentPage() == $plaga->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($plaga->currentPage() == $plaga->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $plaga->url($plaga->currentPage()+1)}}">Siguiente</a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirmacion-eliminacion.js') }}"></script>
@endsection