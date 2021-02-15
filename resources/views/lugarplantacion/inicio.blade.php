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
                        <a href="{{url('lugarplantacion/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Municipio</th>
                        <th>Zona</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lugarplantacion as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->municipio}}</td>
                        <td>{{$data->zona}}</td>
                        <td>{{$data->latitud}}</td>
                        <td>{{$data->longitud}}</td>
                        <td>
                        <form id="eliminar{{$data->id}}" action="{{ url('/lugarplantacion/delete/'.$data->id) }}" method="post">
                                @csrf
                                <a href="{{url('lugarplantacion/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($lugarplantacion->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($lugarplantacion->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($lugarplantacion->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $lugarplantacion->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $lugarplantacion->lastPage(); $i++)
                                <li class="page-item {{ ($lugarplantacion->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($lugarplantacion->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $lugarplantacion->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($lugarplantacion->currentPage() == $lugarplantacion->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($lugarplantacion->currentPage() == $lugarplantacion->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $lugarplantacion->url($lugarplantacion->currentPage()+1)}}">Siguiente</a>
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