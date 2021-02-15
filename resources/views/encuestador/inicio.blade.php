@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Encuestador</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('encuestador/create')}}" type="button"
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
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Profesion</th>
                        <th>Telefono</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($encuestador as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre}}</td>
                        <td>{{$data->apellidos}}</td>
                        <td>{{$data->direccion}}</td>
                        <td>{{$data->profesion}}</td>
                        <td>{{$data->telefono}}</td>
                        <td>
                            <form id="eliminar{{$data->id}}" action="{{ url('/encuestador/delete/' . $data->id) }}" method="post">
                                @csrf
                                <a href="{{url('encuestador/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($encuestador->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($encuestador->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($encuestador->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $encuestador->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $encuestador->lastPage(); $i++)
                                <li class="page-item {{ ($encuestador->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($encuestador->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $encuestador->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($encuestador->currentPage() == $encuestador->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($encuestador->currentPage() == $encuestador->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $encuestador->url($encuestador->currentPage()+1)}}">Siguiente</a>
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