@extends('inicio.inicio')
@section('contenido')
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">150</font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevos pedidos</font></font></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información </font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53 </font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">%</font></font></sup></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Porcentaje de rebote</font></font></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información </font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registros de usuarios</font></font></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información </font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sesenta y cinco</font></font></h3>

                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitantes únicos</font></font></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información </font></font><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
           
        
        
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Mes anterior"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Seleccione mes"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Febrero 2021</font></font></th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Próximo mes"></span></th></tr><tr><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Su</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mes</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nosotros</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Th</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fr</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sa</font></font></th></tr></thead><tbody><tr><td data-action="selectDay" data-day="01/31/2021" class="day old weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></td><td data-action="selectDay" data-day="02/01/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td data-action="selectDay" data-day="02/02/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td data-action="selectDay" data-day="02/03/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td data-action="selectDay" data-day="02/04/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td data-action="selectDay" data-day="02/05/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td data-action="selectDay" data-day="02/06/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td></tr><tr><td data-action="selectDay" data-day="02/07/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td><td data-action="selectDay" data-day="02/08/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td><td data-action="selectDay" data-day="02/09/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td><td data-action="selectDay" data-day="02/10/2021" class="day active today"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td><td data-action="selectDay" data-day="02/11/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></td><td data-action="selectDay" data-day="02/12/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></td><td data-action="selectDay" data-day="02/13/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></td></tr><tr><td data-action="selectDay" data-day="02/14/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></td><td data-action="selectDay" data-day="02/15/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></td><td data-action="selectDay" data-day="02/16/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dieciséis</font></font></td><td data-action="selectDay" data-day="02/17/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></td><td data-action="selectDay" data-day="02/18/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></td><td data-action="selectDay" data-day="02/19/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></td><td data-action="selectDay" data-day="02/20/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></td></tr><tr><td data-action="selectDay" data-day="02/21/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></td><td data-action="selectDay" data-day="02/22/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></td><td data-action="selectDay" data-day="02/23/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></td><td data-action="selectDay" data-day="02/24/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></td><td data-action="selectDay" data-day="02/25/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></td><td data-action="selectDay" data-day="02/26/2021" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></td><td data-action="selectDay" data-day="02/27/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></td></tr><tr><td data-action="selectDay" data-day="02/28/2021" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></td><td data-action="selectDay" data-day="03/01/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td data-action="selectDay" data-day="03/02/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td data-action="selectDay" data-day="03/03/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td data-action="selectDay" data-day="03/04/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td data-action="selectDay" data-day="03/05/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td data-action="selectDay" data-day="03/06/2021" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td></tr><tr><td data-action="selectDay" data-day="03/07/2021" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td><td data-action="selectDay" data-day="03/08/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td><td data-action="selectDay" data-day="03/09/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td><td data-action="selectDay" data-day="03/10/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td><td data-action="selectDay" data-day="03/11/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></td><td data-action="selectDay" data-day="03/12/2021" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></td><td data-action="selectDay" data-day="03/13/2021" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month active">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection