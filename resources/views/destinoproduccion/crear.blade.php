@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva destinoproduccion</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('destinoproduccion')}}" method="post">
                 @csrf
                    <div class="card-body row">
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputEmail1">Destino</label>
                            <input type="text" class="form-control" name="destino" placeholder="Destino"required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Detalle</label>
                            <textarea type="text" class="form-control" name="detalle" placeholder="Detalle" required minlength="0" maxlength="100"></textarea>
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