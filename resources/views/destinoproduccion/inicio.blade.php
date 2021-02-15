@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Destino de Produccion</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="{{url('destinoproduccion/create')}}" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Destino</th>
                        <th>Detalle</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($destinoproduccion as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->destino}}</td>
                        <td>{{$data->detalle}}</td>
                        <td>
                            <form id="eliminar{{$data->id}}" action="{{ url('/destinoproduccion/delete/' . $data->id) }}" method="post">
                                @csrf
                                <a href="{{url('destinoproduccion/'.$data->id.'/edit')}}" class="btn btn-outline-warning btn-sm">
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
                    @if ($destinoproduccion->lastPage() > 1)
                        <ul class="pagination justify-content-center page1-links">
                            @if (!($producdestinoproducciontor->currentPage() == 1))
                                <li class="page-item prev">
                                    <a class="{{ ($destinoproduccion->currentPage() == 1) ? ' ' : 'disabled' }} page-link"
                                       href="{{ $destinoproduccion->url(1) }}">Atras</a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $destinoproduccion->lastPage(); $i++)
                                <li class="page-item {{ ($destinoproduccion->currentPage() == $i) ? 'active' : '' }} ">
                                    <a class=" page-link {{ ($destinoproduccion->currentPage() == $i) ? ' ' : 'disabled' }}"
                                       href="{{ $destinoproduccion->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if (!($destinoproduccion->currentPage() == $destinoproduccion->lastpage()))
                                <li class="page-item next">
                                    <a class="page-link {{ ($destinoproduccion->currentPage() == $destinoproduccion->lastpage()) ? ' ' : 'disabled' }}"
                                       href="{{ $destinoproduccion->url($destinoproduccion->currentPage()+1)}}">Siguiente</a>
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