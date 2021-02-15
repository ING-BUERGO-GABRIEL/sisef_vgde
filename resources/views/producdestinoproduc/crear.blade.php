@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Destino Produccion</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('producdestinoproduc')}}" method="post">
                @csrf
                    <div class="card-body row">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Produccion</label>
                            <select class="form-control" name="id_produccion" id="id_produccion">
                               @foreach($produccion as $data) 
                               <option value="{{$data->id}}">{{$data->id}}</option>
                               @endforeach
                            </select>
                        </div>
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
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection