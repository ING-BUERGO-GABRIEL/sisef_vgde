@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Tipo de Durazno</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('tipodurazno/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre común</th>
                        <th>Nombre científio</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipodurazno as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre_comun}}</td>
                        <td>{{$data->nombre_cientifico}}</td>
                        <td>{{$data->descripcion}}</td>
                        <td><img src="{{asset($data->foto)}}" alt="" width='170px' height='170px'></td>
                        <td>
                            <form id="eliminar{{$data->id}}" action="{{ url('/tipodurazno/delete/' . $data->id) }}" method="post">
                                @csrf
                                <a href="{{url('tipodurazno/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($tipodurazno->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($tipodurazno->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($tipodurazno->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $tipodurazno->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $tipodurazno->lastPage(); $i++)
                                <li class="page-item {{ ($tipodurazno->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($tipodurazno->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $tipodurazno->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($tipodurazno->currentPage() == $tipodurazno->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($tipodurazno->currentPage() == $tipodurazno->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $tipodurazno->url($tipodurazno->currentPage()+1)}}">Siguiente</a>
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