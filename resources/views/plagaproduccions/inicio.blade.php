@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                     <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - CAMBIOS CLIMATICOS - DESTINO PRODUCCION - <strong>PLAGAS</strong></h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
              <div class="card-body col-lg-6">
                <form action="{{url('plagaproduccions/actualizar/'.$idpro)}}" method="post">
                  @csrf                    
                     <div class="card-body row">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plaga</label>
                            <select class="form-control" name="id_plaga">
                               @foreach($plaga as $data) 
                               <option value="{{$data->id}}">{{$data->nombre}}</option>
                               @endforeach
                            </select>
                        </div>        
                     
                         <input type="hidden" class="form-control" name="id_produccion" value="{{$idpro}}">
                                         
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Superficie Afectada</label>
                            <input type="number" class="form-control" name="superficieafectada_ha" placeholder="Superficie Afectada ha" required min="0" max="10000000000">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Obserbaciones</label>
                            <textarea type="text" class="form-control" name="obserbaciones" placeholder="Obserbaciones" required minlength="0" maxlength="500"></textarea>
                        </div>
                     </div>
                    <!-- /.card-body -->
                
                    <div class="card-footer">                        
                        <a href="{{url('produccion')}}" class="btn btn-danger">Cancelar</a> 
                        <a href="{{url('produccion')}}" class="btn btn-primary float-right">Terminar Registro</a>                        
                        <button type="submit" class="btn btn-success float-right">Guardar</button>                        
                    </div>   
                    
                </form>
            </div>
            <div class="card-body col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Plaga</th>
                        <th>Superficie afectada</th>
                        <th>Fecha</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($plagaproduccions as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nompla}}</td> 
                        <td>{{$data->superficie}}</td>
                        <td>{{$data->fecha}}</td>
                        <td>
                            <form id="eliminar{{$data->idplagap}}" action="{{ url('/plagaproduccions/delete/' . $data->idplagap.'/'.$idpro) }}" method="post">
                                @csrf
                                <button type="button" onclick="confirmEliminar({{ $data->idplagap }})" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirmacion-eliminacion.js') }}"></script>
@endsection