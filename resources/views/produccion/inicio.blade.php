@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Producción</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('produccion/create')}}" type="button" class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Tipo Durasno</th>
                        <th>Encuestador</th>
                        <th>Cantidad Cajas</th>
                        <th>Precio Caja</th>
                        <th>Fecha</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach ($produccion as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nomtip}}</td>
                        <td>{{$data->nomen}}</td>
                        <td>{{$data->catidad}}</td>
                        <td>{{$data->precio}}</td>
                        <td>{{$data->fecha}}</td>
                        <td>
                            <form id="eliminar{{$data->idpro}}" action="{{ url('/produccion/delete/' . $data->idpro) }}" method="post">
                                @csrf
                                <a href="{{url('produccion/'.$data->idpro.'/edit')}}" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar({{ $data->idpro }})" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-start mt-2">
                    @if ($produccion->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($produccion->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($produccion->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $produccion->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $produccion->lastPage(); $i++)
                                <li class="page-item {{ ($produccion->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($produccion->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $produccion->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($produccion->currentPage() == $produccion->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($produccion->currentPage() == $produccion->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $produccion->url($produccion->currentPage()+1)}}">Siguiente</a>
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