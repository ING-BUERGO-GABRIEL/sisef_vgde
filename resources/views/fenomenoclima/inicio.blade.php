@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Fenómeno Climático</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('fenomenoclima/create')}}" type="button"
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
                        <th>Descripción</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fenomenoclima as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nombre}}</td>
                        <td>{{$data->descripcion}}</td>
                        <td>
                        <form id="eliminar{{$data->id}}" action="{{ url('/fenomenoclima/delete/'.$data->id) }}" method="post">
                                @csrf
                                <a href="{{url('fenomenoclima/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($fenomenoclima->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($fenomenoclima->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($fenomenoclima->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $fenomenoclima->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $fenomenoclima->lastPage(); $i++)
                                <li class="page-item {{ ($fenomenoclima->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($fenomenoclima->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $fenomenoclima->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($fenomenoclima->currentPage() == $fenomenoclima->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($fenomenoclima->currentPage() == $fenomenoclima->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $fenomenoclima->url($fenomenoclima->currentPage()+1)}}">Siguiente</a>
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