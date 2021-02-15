@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Usuarios</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('usuario/create')}}" type="button"
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
                        <th>Titulo</th>
                        <th>Permiso</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $key => $usuario)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                @foreach($usuario->roles->pluck('name') as $role)
                                    <span class="badge badge-info">{{ $role }}</span>
                                @endforeach
                            </td>
                            <td>
                                <form id="eliminar{{$usuario->id}}" action="{{ url('/usuario/delete/' . $usuario->id) }}" method="post">
                                    @csrf
<!--                                    <a href="{{url('/usuario/'.$usuario->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>-->
                                    <button type="button" onclick="confirmEliminar({{ $usuario->id }})" class="btn btn-outline-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-start mt-2">
                    @if ($usuarios->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($usuarios->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($usuarios->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $usuarios->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $usuarios->lastPage(); $i++)
                                <li class="page-item {{ ($usuarios->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($usuarios->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $usuarios->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($roles->currentPage() == $usuarios->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($usuarios->currentPage() == $usuarios->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $usuarios->url($usuarios->currentPage()+1)}}">Siguiente</a>
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