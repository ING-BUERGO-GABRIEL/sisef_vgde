@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - <strong>CAMBIOS CLIMATICOS</strong> - DESTINO PRODUCCION - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
            <div class="card-body col-lg-6">
           <form action="{{url('produccioncambiosclimaticos/actualizar/'.$idpro)}}" method="post">
                @csrf        
                    <div class="card-body row  col-sm-12 col-md-8 col-lg-12">                         
                        <input type="hidden" class="form-control" name="id_produccion" value="{{$idpro}}">                    
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Cambio Climatico</label>
                            <select class="form-control" name="id_cambiosclimaticos" id="id_cambiosclimaticos">
                               @foreach($fenomenoclima as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>                        
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
                        </div>                        
                    </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">                        
                        <a href="{{url('produccion')}}" class="btn btn-danger">Cancelar</a> 
                        <a href="{{url('producdestinoproduc/'.$idpro)}}" class="btn btn-primary float-right">Siguiente</a>                        
                        <button type="submit" class="btn btn-success float-right">Guardar</button>                        
                    </div>                     
                </form>
            </div>
            <div class="card-body col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Clima</th>
                        <th>Fecha</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produccioncambiosclimaticos as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nomcli}}</td>
                        <td>{{$data->fecha}}</td>
                        <td>
                            <form id="eliminar{{$data->idcam}}" action="{{ url('/produccioncambiosclimaticos/delete/'.$data->idcam.'/'.$idpro) }}" method="post">
                                @csrf                               
                                <button type="button" onclick="confirmEliminar({{$data->idcam}})" class="btn btn-outline-danger btn-sm">
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
    <script src="{{asset('js/confirmacion-eliminacion.js') }}"></script>
@endsection