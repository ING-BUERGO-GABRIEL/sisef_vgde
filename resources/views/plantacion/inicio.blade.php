@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Plantación</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('plantacion/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>IdProductor</th>
                        <th>TipoRiego</th>
                        <th>TipoAbono</th>
                        <th>CantPlantines</th>
                        <th>Extension</th>
                        <th>Fecha Plantacion</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($plantacion as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nompro}}</td>
                        <td>{{$data->rie}}</td>
                        <td>{{$data->abo}}</td>
                        <td>{{$data->cant}}</td>
                        <td>{{$data->ext}}</td>
                        <td>{{$data->fech}}</td>
                        <td>
                        <form id="eliminar{{$data->idpla}}" action="{{ url('/plantacion/delete/'.$data->idpla) }}" method="post">
                                @csrf
                                <a href="{{url('plantacion/'.$data->idpla.'/edit')}}" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar({{ $data->idpla }})" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>                   
                </table>
                <div class="pagination justify-content-start mt-2">
                    @if ($plantacion->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($plantacion->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($plantacion->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $plantacion->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $plantacion->lastPage(); $i++)
                                <li class="page-item {{ ($plantacion->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($plantacion->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $plantacion->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($plantacion->currentPage() == $plantacion->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($plantacion->currentPage() == $plantacion->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $plantacion->url($plantacion->currentPage()+1)}}">Siguiente</a>
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