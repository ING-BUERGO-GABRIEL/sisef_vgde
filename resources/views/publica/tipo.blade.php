@extends('publica.iniciomenu')
@section('contenido')
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-33">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Tipos</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Inicio</a></li>
              <li class="active">Tipos de Durazno</li>
            </ul>
          </div>
          <div class="box-position" style="background-image:url({{asset('images/bg-breadcrumbs3.jpg')}});"></div>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-sm section-first bg-default text-left">
        <div class="container">
          <div class="row row-30 justify-content-center">
           @foreach($tipodurazno as $data)
            <div class='col-sm-12 col-md-8 col-lg-8'>
            <li>
              <h2>{{$data->nombre_comun}}</h2>
              <h4>{{$data->nombre_cientifico}}</h4>
              <p>{{$data->descripcion}}</p>
            </li>
            
          </div>
            <div class='col-sm-12 col-md-4 col-lg-4'>
            <img src="{{asset($data->foto)}}" alt='' width='300px' height='400px'/>
            </div>  

            @endforeach

      
          </div>
      </div>
      </section>
 @endsection