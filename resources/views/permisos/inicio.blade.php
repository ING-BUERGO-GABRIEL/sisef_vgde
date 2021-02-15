@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Permisos</h5>
                    </div>
<!--                    <div class="col col-lg-10 ">
                        <a href="{{url('tipodurazno/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>-->
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre común</th>
<!--                        <th style="width: 100px">Acción</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permisos as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
<!--                            <td>
                                <form id="eliminar{{$data->id}}" action="{{ url('/permiso/delete/' . $data->id) }}" method="post">
                                    @csrf
                                    <a href="{{url('permiso/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button type="button" onclick="confirmEliminar({{ $data->id }})" class="btn btn-outline-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>-->
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('js/confirmacion-eliminacion.js') }}"></script>
@endsection