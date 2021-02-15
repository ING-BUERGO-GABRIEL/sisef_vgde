@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Proveedor</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('proveedor/create')}}" type="button"
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
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proveedor as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre}}</td>
                        <td>{{$data->direccion}}</td>
                        <td>{{$data->telefono}}</td>
                        <td>
                            <form id="eliminar{{$data->id}}" action="{{ url('/proveedor/delete/' . $data->id) }}" method="post">
                                @csrf
                                <a href="{{url('proveedor/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($proveedor->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($proveedor->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($proveedor->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $proveedor->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $proveedor->lastPage(); $i++)
                                <li class="page-item {{ ($proveedor->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($proveedor->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $proveedor->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($proveedor->currentPage() == $proveedor->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($proveedor->currentPage() == $proveedor->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $proveedor->url($proveedor->currentPage()+1)}}">Siguiente</a>
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