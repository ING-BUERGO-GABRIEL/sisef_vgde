@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar rol</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{url('rol/actualizar/'.$role->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputEmail1">Nombre del Permiso</label>
                                <input type="text" class="form-control" value="{{$role->name}}" name="nombre"
                                       placeholder="Nombre del permiso ej: crear_usuario">
                            </div>
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputPassword1">Descripción corta</label>
                                <input type="text" class="form-control" value="{{$role->title}}" name="descripcion"
                                       placeholder="Descripción del permiso ej: Crear usuario">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>Seleccione los permisos</label>
                                <select class="select2" multiple="multiple" name="abilities[]" data-placeholder="Select a State" style="width: 100%;">
                                    {{--<option value="AK" data-select2-id="72">Alaska</option>--}}
                                    @foreach($abilities as $id => $abilities)
                                        <option value="{{ $id }}" {{ in_array($id, old('abilities', [])) || $role->getAbilities()->pluck('name', 'name')->contains($abilities) ? 'selected' : '' }}>{{ $abilities }}</option>
                                    @endforeach
                                </select>
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