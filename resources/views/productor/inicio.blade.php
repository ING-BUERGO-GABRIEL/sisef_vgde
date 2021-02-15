@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Productor</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('productor/create')}}" type="button"
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
                        <th>Fecha de Nacimiento</th>
                        <th>Nacionalidad</th>
                        <th>Direccion</th>
                        <th>Celular</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($productor as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre}}</td>
                        <td>{{$data->apellidos}}</td>
                        <td>{{$data->fechaNacimiento}}</td>
                        <td>{{$data->nacionalidad}}</td>
                        <td>{{$data->direccion}}</td>
                        <td>{{$data->celular}}</td>
                        <td>
                            <form id="eliminar{{$data->id}}" action="{{ url('/productor/delete/' . $data->id) }}" method="post">
                                @csrf
                                <a href="{{url('productor/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($productor->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($productor->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($productor->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $productor->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $productor->lastPage(); $i++)
                                <li class="page-item {{ ($productor->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($productor->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $productor->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($productor->currentPage() == $productor->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($productor->currentPage() == $productor->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $productor->url($productor->currentPage()+1)}}">Siguiente</a>
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