@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                  <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0"><strong>PRODUCCION</strong> - CAMBIOS CLIMATICOS - DESTINO PRODUCCION - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{url('produccion/actualizar/'.$produccion->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                 @csrf
                    <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plantacion</label>
                            <select class="form-control" name="id_plantacion" id="id_plantacion">
                               @foreach($plantacion as $data) 
                               <option value="{{$data->idpla}}">{{$data->municipio}} - {{$data->nompro}} {{$data->ape}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Encuestador</label>
                            <select class="form-control" name="id_encuestador" id="id_encuestador">
                               @foreach($encuestador as $data) 
                                  <option value="{{$data->id}}">{{$data->nombre}} {{$data->apellidos}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Tipo durazno</label>
                            <select class="form-control" name="id_tipo_durazno" id="id_tipo_durazno">
                               @foreach($tipodurazno as $data) 
                                 <option value="{{$data->id}}">{{$data->nombre_comun}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Diametro Promedio</label>
                            <input type="text" class="form-control" name="diametropromedio" value="{{$produccion->diametropromedio}}" placeholder="diametropromedio"required  min="0" max="999999" step=".01">
                        </div>
                        <input type="hidden" class="form-control" name="id_usuario" placeholder="id_usuario" value="{{auth()->user()->id}}">                    
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Fecha de Produccion</label>
                            <input type="date" class="form-control" name="fechaproduccion" value="{{$produccion->fechaproduccion}}" placeholder="fechaproduccion"required>
                        </div>
                         <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Cantidad de Cajas</label>
                            <input type="text" class="form-control" name="cantidadcajas" value="{{$produccion->cantidadcajas}}"  placeholder="cantidadcajas" required  min="0" max="999999">
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-64">
                            <label for="exampleInputPassword1">Preciopor Por Caja (bs)</label>
                            <input type="number" class="form-control" name="preciocaja_bs" value="{{$produccion->preciocaja_bs}}" placeholder="preciocaja_bs" required  min="0" max="999999" step=".01">
                        </div>                  
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Costo total Produccion</label>
                            <input type="text" class="form-control" name="costoproduccion" value="{{$produccion->costoproduccion}}" placeholder="costoproduccion"required>
                        </div>

                    </div>
                    </div>
                   
                    <!-- /.card-body -->

                    <div class="card-footer">
                         <a href="{{url('produccion')}}" class="btn btn-danger">Cancelar</a> 
                        <button type="submit" class="btn btn-primary  float-right">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection