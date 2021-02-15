@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nuevo sistema prevención</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('sistemaprevencion')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body row">
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre"  placeholder="Nombre" required minlength="0" maxlength="15">
                        </div>
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputPassword1">Descripción</label>
                            <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion" required minlength="0" maxlength="600"></textarea>
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