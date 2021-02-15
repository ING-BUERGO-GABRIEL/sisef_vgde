@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar plagaproduccion</h5>
                    </div>


                </div>
            </div>
            <div class="card-body">
                <form action="{{url('plagaproduccions/actualizar/'.$plagaproduccions->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                 @csrf
                 <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">   
                            
                            <input type="hidden" class="form-control" name="id_plaga" value="{{$plagaproduccions->id_plaga}}" placeholder="id_plaga">
                    
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plaga</label>
                            <select class="form-control" name="id_plaga" id="id_plaga">
                               @foreach($plaga as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>

                            <input type="hidden" class="form-control" name="id_produccion" value="{{$plagaproduccions->id_produccion}}" placeholder="id_produccion">
                       
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plaga</label>
                            <select class="form-control" name="id_produccion" id="id_produccion">
                               @foreach($produccion as $data) 
                               <option value="{{$data->id}}">{{$data->preciocaja_bs}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Obserbaciones</label>
                            <input type="text" class="form-control" name="obserbaciones" value="{{$plagaproduccions->obserbaciones}}" placeholder="obserbaciones">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Superficieafectada_ha</label>
                            <input type="text" class="form-control" name="superficieafectada_ha" value="{{$plagaproduccions->superficieafectada_ha}}" placeholder="superficieafectada_ha">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" value="{{$plagaproduccions->fecha}}" placeholder="fecha">
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