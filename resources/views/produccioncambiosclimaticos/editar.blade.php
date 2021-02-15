@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('produccioncambiosclimaticos/actualizar/'.$produccioncambiosclimaticos->id)}}" method="post">
                @csrf
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                    
                        
                            
                            <input type="hidden" class="form-control" name="id_produccion" value="{{$produccioncambiosclimaticos->id_produccion}}" placeholder="Nombre">
                        
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Cambio Climatico</label>
                            <select class="form-control" name="id_cambiosclimaticos" id="id_cambiosclimaticos">
                               @foreach($fenomenoclima as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>
                        <!--<div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">id_cambiosclimaticos</label>
                            <input type="number" class="form-control" name="id_cambiosclimaticos" value="{{$produccioncambiosclimaticos->id_cambiosclimaticos}}" placeholder="Direccion">
                        </div>-->    
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">fecha</label>
                            <input type="date" class="form-control" name="fecha" value="{{$produccioncambiosclimaticos->fecha}}" placeholder="Telefono">
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection