@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nuevo Lugar de Plantación</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
             <div id="map"></div>
                <form action="{{url('lugarplantacion')}}" method="post">
                @csrf
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputEmail1">Municipio</label>
                            <input type="text" class="form-control" name="municipio" placeholder="Municipio" required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Zona</label>
                            <input type="text" class="form-control" name="zona" placeholder="Zona" required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Latitud</label>
                            <input type="number" class="form-control" name="latitud" placeholder="Latitud" required min="-90" max="90" step=".000000000001">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Longitud</label>
                            <input type="number" class="form-control" name="longitud" placeholder="Longitud" required min="-180" max="180" step=".000000000001">
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