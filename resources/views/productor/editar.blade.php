@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar productor</h5>
                    </div>


                </div>
            </div>
            <div class="card-body">
                <form action="{{url('productor/actualizar/'.$productor->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                 @csrf
                 <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{$productor->nombre}}" placeholder="nombre">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{$productor->apellidos}}" placeholder="apellidos">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimiento" value="{{$productor->fechaNacimiento}}" placeholder="fechaNacimiento">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" value="{{$productor->nacionalidad}}" placeholder="nacionalidad">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Direccion</label>
                            <input type="text" class="form-control" name="direccion" value="{{$productor->direccion}}" placeholder="direccion">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Celular</label>
                            <input type="number" class="form-control" name="celular" value="{{$productor->celular}}" placeholder="celular">
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