@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Encuestador</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('encuestador')}}" method="post">
                @csrf
                    <div class="card-body row">
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required minlength="0" maxlength="15">
                        </div>
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Apellido</label>
                            <input type="text" class="form-control" name="apellidos" placeholder="Apellido" required minlength="0" maxlength="20">
                        </div>
                        </div>
                            <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Direccion</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" required minlength="0" maxlength="100">
                        </div>
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Profesion</label>
                            <input type="text" class="form-control" name="profesion" placeholder="Profesion" required minlength="0" maxlength="30">
                        </div>
                            <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Telefono</label>
                            <input type="number" class="form-control" name="telefono" placeholder="Telefono" required minlength="0" maxlength="15">
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