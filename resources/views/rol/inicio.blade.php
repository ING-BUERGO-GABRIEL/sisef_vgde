@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Roles</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('rol/create')}}" type="button"
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
                    @foreach($roles as $key => $rol)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$rol->name}}</td>
                            <td>{{$rol->title}}</td>
                            <td>
                                @foreach($rol->abilities->pluck('name') as $permiso)
                                    <span class="badge badge-info">{{ $permiso }}</span>
                                @endforeach
                            </td>
                            <td>
                                <form id="eliminar{{$rol->id}}" action="{{ url('/rol/delete/' . $rol->id) }}" method="post">
                                    @csrf
<!--                                    <a href="{{url('/rol/editar/'.$rol->id)}}" class="btn btn-outline-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>-->
                                    <button type="button" onclick="confirmEliminar({{ $rol->id }})" class="btn btn-outline-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-start mt-2">
                    @if ($roles->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($roles->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($roles->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $roles->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $roles->lastPage(); $i++)
                                <li class="page-item {{ ($roles->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($roles->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $roles->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($roles->currentPage() == $roles->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($roles->currentPage() == $roles->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $roles->url($roles->currentPage()+1)}}">Siguiente</a>
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