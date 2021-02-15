@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Plantación</h5>
                    </div>

                </div>
            </div>
            <div class="card-body ">
                <form action="{{url('plantacion')}}" method="post">
                @csrf
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">               
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Lugar Plantacion</label>
                            <select class="form-control" name="id_lugar" id="id_lugar">
                               @foreach($lugarplantacion as $data) 
                               <option value="{{$data->id}}">{{$data->municipio}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Proveedor</label>
                            <select class="form-control" name="id_proveedor" id="id_proveedor">
                               @foreach($proveedor as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Sistema Prevencion Clima</label>
                            <select class="form-control" name="id_sis_prevencion" id="id_plantacion">
                               @foreach($fenomenoclima as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Productor</label>
                            <select class="form-control" name="id_productor" id="id_productora">
                               @foreach($productor as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Tipo de Riego</label>
                            <input type="text" class="form-control" name="tiporiego">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Tipo de Abono</label>
                            <input type="text" class="form-control" name="tipoabono">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plantines por Hectareas</label>
                            <input type="number" class="form-control" name="cantidadplantine_ha"required min="0" max="999999">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Extension en Hectareas</label>
                            <input type="number" class="form-control" name="extencion_ha"required min="0" max="999999">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Fecha de Plantacion</label>
                            <input type="date" class="form-control" name="fechaplantacion">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->


                    </tbody>                   
                </table>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection