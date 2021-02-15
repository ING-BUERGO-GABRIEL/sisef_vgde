@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - CAMBIOS CLIMATICOS - <strong>DESTINO PRODUCCION</strong> - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
            <div class="card-body col-lg-6">
                <form action="{{url('producdestinoproduc/actualizar/'.$idpro)}}" method="post">
                @csrf
                    <div class="card-body row">                        
                        <input type="hidden" class="form-control" name="id_produccion" value="{{$idpro}}">                     
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Destinoproduccion</label>
                            <select class="form-control" name="id_destinoproduccion" id="id_destinoproduccion">
                               @foreach($destinoproduccion as $data) 
                               <option value="{{$data->id}}">{{$data->destino}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">porsentaje_destinado</label>
                            <input type="number" class="form-control" name="porsentaje_destinado" placeholder="porsentaje_destinado" required min="1" max="100">
                        </div>
                    </div>
                    <div class="card-footer">                        
                        <a href="{{url('produccion')}}" class="btn btn-danger">Cancelar</a> 
                        <a href="{{url('plagaproduccions/'.$idpro)}}" class="btn btn-primary float-right">Siguiente</a>                        
                        <button type="submit" class="btn btn-success float-right">Guardar</button>                        
                    </div>                     
                </form>
            </div>
            <div class="card-body col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Destino de Produccion</th>
                        <th>Porcentaje destinado</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($producdestinoproduc as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nompro}}</td>
                        <td>{{$data->ape}}</td>
                        <td>
                        <form id="eliminar{{$data->idpro}}" action="{{ url('/producdestinoproduc/delete/'.$data->idpro.'/'.$idpro) }}" method="post">
                                @csrf                              
                                <button type="button" onclick="confirmEliminar({{ $data->idpro }})" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>                   
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirmacion-eliminacion.js') }}"></script>
@endsection