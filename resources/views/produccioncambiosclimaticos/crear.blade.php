@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Cambio climatico</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('produccioncambiosclimaticos')}}" method="post">
                @csrf
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row  col-sm-12 col-md-8 col-lg-8"> 
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Lugar Produccion</label>
                            <select class="form-control" name="id_produccion" id="id_produccion">
                               @foreach($produccion as $data) 
                               <option value="{{$data->id}}">{{$data->preciocaja_bs}}</option>
                               @endforeach
                            </select>
                        </div>
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
                            <input type="text" class="form-control" name="id_cambiosclimaticos" placeholder="id_cambiosclimaticos">
                        </div>-->
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
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