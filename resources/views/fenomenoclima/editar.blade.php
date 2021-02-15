@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar Fenómeno Climático</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('fenomenoclima/actualizar/'.$fenomenoclima->id)}}" method="post">
                @csrf
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$fenomenoclima->nombre}}">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Descripción</label>
                            <textarea type="text" class="form-control" name="descripcion" placeholder="Descrcipcion">{{$fenomenoclima->descripcion}}</textarea>
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