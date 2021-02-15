@extends('publica.iniciomenu')
@section('contenido')
 <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
        <div class="swiper-wrapper text-left">
            <div class="swiper-slide context-dark" data-slide-bg="{{asset('images/slider-1-1920x729.jpg')}}">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-center justify-content-xxl-start">
                            <div class="col-md-10 col-xxl-6">
                                <div class="slider-modern-box">
                                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Produccion</span></h1>
                                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Plantar un árbol de durazno es un proyecto fácil, pero requiere paciencia. Las semillas durazno son lentas para germinar y los  árboles tardan en dar sus frutos.</p>
                                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="tipos.html" data-caption-animate="slideInLeft" data-caption-delay="400">Ver Más</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="{{asset('images/slider-2-1920x729.jpg')}}">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-center justify-content-xxl-start">
                            <div class="col-md-10 col-xxl-6">
                                <div class="slider-modern-box">
                                    <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft" data-caption-delay="0">Calidad</span></h1>
                                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Vallegrande es por mucho uno de los principales productores de durazno de calidad en Bolivia.</p>
                                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="tipos.html" data-caption-animate="slideInLeft" data-caption-delay="400">Ver mas</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{asset('images/slider-3-1920x729.jpg')}}">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-center justify-content-xxl-start">
                            <div class="col-md-10 col-xxl-6">
                                <div class="slider-modern-box">
                                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Clima</span></h1>
                                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Vallegrande cuenta con diversos tipos de clima que pueden afectar a la produccion.</p>
                                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="tipos.html" data-caption-animate="slideInUp" data-caption-delay="400">Ver mas</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-style-2"></div>
    </section>
<!-- Icons Ruby-->
    <section class="section section-md bg-default section-top-image">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <article class="box-icon-ruby">
                        <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-ruby-icon linearicons-leaf"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-ruby-title"><a href="#">&nbsp;&nbsp;Produccion</a></h4>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <article class="box-icon-ruby">
                        <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-ruby-icon linearicons-shovel"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-ruby-title"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calidad</a></h4>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <article class="box-icon-ruby">
                        <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-ruby-icon linearicons-sun"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-ruby-title"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clima</a></h4>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending products-->
    <section class="section section-md bg-default">
        <div class="container"> </div>
    </section>

    <!-- Section CTA 2-->
    <section class="section text-center">
        <div class="parallax-container" data-parallax-img="{{asset('images/bg-parallax-1.jpg')}}">
            <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
                <div class="container">
                    <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Vallegrande Capital Frutìcola</span></h2>
                    <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Vallegrande a sido declarada por ley, La capital departamental de las frutas&nbsp; (durazno, manzana, ciruelo, chirimoya, uva, pera, etc.), por ser la zona donde se concentra la mejor y mayor producción de estos frutales. </span></p>
                    <a class="button button-width-xl-230 button-primary button-pipaluk" href="https://eldeber.com.bo/82257_vallegrande-es-la-capital-de-la-produccion-de-frutas-del-valle">Leer Mas...</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team of professionals-->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="oh">
                <h2 class="wow slideInUp" data-wow-delay="0s">Trabajadores</h2>
            </div>
            <div class="row row-30 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="0s">
                    <!-- Team Classic-->
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="{{asset('images/team-11-370x406.jpg')}}" alt="" width="370" height="406"/></a>
                        <div class="team-classic-caption">
                            <h5 class="team-classic-name"><a href="#">Ryan Wilson</a></h5>
                            <p class="team-classic-status">Productor</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                    <!-- Team Classic-->
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="{{asset('images/team-22-370x406.jpg')}}" alt="" width="370" height="406"/></a>
                        <div class="team-classic-caption">
                            <h5 class="team-classic-name"><a href="#">Carmen Ortiz</a></h5>
                            <p class="team-classic-status">Productora</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
                    <!-- Team Classic-->
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="{{asset('images/team-33-370x406.jpg')}}" alt="" width="370" height="406"/></a>
                        <div class="team-classic-caption">
                            <h5 class="team-classic-name"><a href="#">Sam Garcia</a></h5>
                            <p class="team-classic-status">Productor</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- About us-->
    <section class="section">
        <div class="parallax-container" data-parallax-img="{{asset('images/bg-parallax-2.jpg')}}">
            <div class="parallax-content section-xl context-dark bg-overlay-68">
                <div class="container">
                    <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">60</span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
                                </div>
                                <h6 class="counter-creative-title">Calidad de produccion</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">16.5cm</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                                </div>
                                <h6 class="counter-creative-title">Cantidad producida</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">4</span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
                                </div>
                                <h6 class="counter-creative-title">Tipos de Clima</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">13</span><span class="icon counter-creative-icon fl-bigmug-line-user143"></span>
                                </div>
                                <h6 class="counter-creative-title">Productores</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Improve your interior with deco-->
        <section class="section section-md bg-default section-top-image">
        <div class="container">
            <div class="oh h2-title">
                <h2 class="wow slideInUp" data-wow-delay="0s">Galeria</h2>
            </div>
            <div class="row row-30" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-11-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-11-1200x800.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-11-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Floracion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-22-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-22-1200x800.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-22-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Hojas</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-33-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-33-800x1200.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-33-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Fumigacion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-44-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-44-800x1200.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-44-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Medicion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-55-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-55-800x1200.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-55-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Cosecha</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="{{asset('images/grid-gallery-66-370x303.jpg')}}" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-original-66-1200x800.jpg')}}" data-lightgallery="item"><img src="{{asset('images/grid-gallery-66-370x303.jpg')}}" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Separacion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection