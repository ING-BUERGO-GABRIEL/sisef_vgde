@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva plagaproduccion</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('plagaproduccions')}}" method="post">
                 @csrf
                 <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plaga</label>
                            <select class="form-control" name="id_plaga" id="id_plaga">
                               @foreach($plaga as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>
                        <!--<div class="form-group col col-lg-4"> 
                            <label for="exampleInputEmail1">Id_plaga</label>
                            <input type="text" class="form-control" name="id_plaga" placeholder="id_plaga">
                        </div>-->
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Produccion</label>
                            <select class="form-control" name="id_produccion" id="id_produccion">
                               @foreach($produccion as $data) 
                               <option value="{{$data->id}}">{{$data->preciocaja_bs}}</option>
                               @endforeach
                            </select>
                        </div>
                        <!--<div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Id_produccion</label>
                            <input type="text" class="form-control" name="id_produccion" placeholder="id_produccion">
                        </div>-->                     
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Superficie Afectada</label>
                            <input type="number" class="form-control" name="superficieafectada_ha" placeholder="Superficie Afectada ha" required min="0" max="10000000000">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
                        </div>
                        <div class="form-group col col-lg-12">
                            <label for="exampleInputPassword1">Obserbaciones</label>
                            <textarea type="text" class="form-control" name="obserbaciones" placeholder="Obserbaciones" required minlength="0" maxlength="500"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection