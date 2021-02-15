@extends('publica.iniciomenu')
@section('contenido')
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Datos</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Inicio</a></li>
              <li class="active">Datos</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url({{asset('images/bg-breadcrumbs2.jpg')}});"></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section  id="titulo" class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">
          <div class="col-md-12 col-lg-6 col-xl-6" id="grafmese">            
          </div>
            <div class="col-md-10 col-lg-5 col-xl-5">
              <h2>Graficas</h2>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Temporada</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Clima</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p></p>
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li id="grafmese2016">2016</li>
                        <li id="grafmese2017">2017</li>
                        <li id="grafmese2018">2018</li>
                        <li id="grafmese2019">2019</li>
                        <li id="grafmese2020">2020</li>
                        <li id="grafmese2021">2021</li>
                      </ul>
                    </div>
                   <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Recargar</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li id="grafhelada">Helada</li>
                        <li id="grafgranizo">Granizo</li>
                        <li id="grafsequia">Sequia</li>
                        <li id="grafrafaga">Rafaga de viento</li>
                        </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Recargar</a></div>
                   </div>
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Latest Projects-->
      <section class="section section-md section-fluid bg-default">
        <div class="container">
          <h2>Gestiones</h2>
            <div class="col-md-12 col-lg-12 col-xl-12 table-responsive" >  
            <div      id="grafgestion">       </div>
            </div>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-stage-padding="15" data-xxl-stage-padding="0" data-autoplay="true" data-nav="true" data-dots="true">
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><a href="{{url('estadistica')}}"><img  src="{{asset('images/or/2.jpg')}}" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="{{url('estadistica')}}">Grafica</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="1999">Barras</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><a href="{{url('estadistica/lineas')}}"><img src="{{asset('images/or/3.jpg')}}" alt="" width="420" height="308"/></a>
              </div>          
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="{{url('estadistica/lineas')}}">Grafica</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2005">Lineas</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><a href="{{url('estadistica/torta')}}"><img src="{{asset('images/or/4.jpg')}}" alt="" width="420" height="308"/><a/>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="{{url('estadistica/torta')}}">Grafica</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2010">Torta</time>
              </h5>
            </div>
          </div>
       
        </div>
      </section>

      <!-- What people say-->

 @endsection
 @section('scripts')   

@endsection