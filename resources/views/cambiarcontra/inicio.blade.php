@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Cambiar contraseña</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('contrasena')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputEmail1">Ingrese la nueva contraseña</label>
                                <input type="password" class="form-control" name="contrasena"
                                       placeholder="***********">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection