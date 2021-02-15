@extends('publica.iniciomenu')
@section('contenido')
      <section  id="titulo" class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">          
            <div class="col-md-12 col-lg-12 col-xl-12">
               <div class="row justify-content-center" id =""><h2>Graficas</h2></div>
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Barras</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('estadistica/lineas')}}">Lineas</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('estadistica/torta')}}">Torta</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                       <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-5">
                         <ul class="nav nav-tabs">
                           <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-5-1" data-toggle="tab">Produccion</a></li>
                           <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-5-2" data-toggle="tab">Clima</a></li>
                           <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-5-3" data-toggle="tab">Lugar</a></li>
                         </ul>
                         <div class="tab-content">
                           <div class="tab-pane fade show active" id="tabs-5-1">
                             <div class="col-md-12 col-lg-12 col-xl-12">
                                  <div id="grafbar"> </div>
                             </div>
                             <div class="row justify-content-center" id =""><h4>Cantidad de cajas producidad por año y mes</h4></div>
                           </div>
                           <div class="tab-pane fade show" id="tabs-5-2">
                             <div class="col-md-12 col-lg-12 col-xl-12">
                                  <div id="grafbarcli"> </div>
                             </div>
                             <div class="row justify-content-center" id =""><h4>Los climas que afectaron a cada municipio por año</h4></div>
                           </div>
                            <div class="tab-pane fade show" id="tabs-5-3">
                             <div class="col-md-12 col-lg-12 col-xl-12">
                                  <div id="grafbarlu"> </div>
                             </div>
                             <div class="row justify-content-center" id =""><h4>Cantidad producida por cada municipio</h4></div>
                           </div>
                         </div>
                       </div>
                    </div>
                  </div>                          
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

 @endsection
 @section('scripts')   
    <script> 
    Morris.Bar({
    element: 'grafbar',
        data: [
      {x: '2016',value: 120,value2:50 ,value3:150,value4:20 ,value5:196 },
      {x: '2017',value: 500,value2:300,value3:400 ,value4:235,value5:425 },
      {x: '2018',value: 1200 ,value2:1400,value3:2000,value4:1124 ,value5:2542 },
      {x: '2019',value: 800 ,value2:700,value3:400 ,value4:321 ,value5:1244},
      {x: '2020',value: 1200 ,value2:1400,value3:400 ,value4:321 ,value5:1244},
      {x: '2021',value: 800 ,value2:700,value3:15,value4:20 ,value5:196 },
    ],
    xkey: 'x',
    ykeys: ['value','value2', 'value3','value4','value5'],
    labels: ['Morromoro', 'Pucara','El Trigal','Guadalupe','Vallegrande'],
    
    resize:true,
  });
Morris.Bar({
    element: 'grafbarcli',
data: [
      {x: '2016', value: 120,value2:50 ,value3:150,value4:20  },
      {x: '2017',value: 500,value2:300,value3:400 ,value4:235 },
      {x: '2018',  value: 1200 ,value2:1400,value3:2000,value4:1124  },
      {x: '2019',value: 800 ,value2:700,value3:400 ,value4:321 },
      {x: '2020',  value: 1200 ,value2:1400,value3:400 ,value4:321},
      {x: '2021', value: 800 ,value2:700,value3:15,value4:20  },
    ],
    xkey: 'x',
    ykeys: ['value','value2', 'value3','value4'],
    labels: ['Helado', 'Granizo','Sequia','Rafaga deViento'],
    resize:true,
  });
  Morris.Bar({
    element: 'grafbarlu',
data: [
      {x: 'Morromoro', value: 1110,value2:1500 ,value3:1900,value4:1000  },
      {x: 'Pucara',value: 900,value2:1450,value3:1899 ,value4:900 },
      {x: 'El Trigal',  value: 1200 ,value2:1400,value3:2000,value4:1124  },
      {x: 'Guadalupe',value: 1300 ,value2:1555,value3:1998 ,value4:1333 },
      {x: 'Vallegrande',  value: 1200 ,value2:1666,value3:1888 ,value4:1234},
    ],
    xkey: 'x',
    ykeys: ['value','value2', 'value3','value4'],
    labels: ['2018', '2019','2020','2021'],
    resize:true,
     barColors: function (row, series, type) {
      if (type === 'bar') {
        var red = Math.ceil(255 * row.y / this.ymax);
        return 'rgb(' + red + ',0,0)';
      }
      else {
        return '#000';
      }
    }
  });
  
  </script>
@endsection