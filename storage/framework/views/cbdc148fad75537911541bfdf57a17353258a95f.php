<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<head>
    <title>SISEF-VGDA</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
    </div>
</div>
<div class="page"><a class="section section-banner d-none d-xl-block" href="https://www.facebook.com/IngenieriaEnSistemasFivc" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"><img src="<?php echo e(asset('images/banner/foreground-04-1600x60.png')); ?>" srcset="<?php echo e(asset('images/banner/foreground-04-1600x60.png')); ?> 1x, <?php echo e(asset('images/banner/foreground-04-3200x120.png')); ?> 2x" alt="" width="1600" height="310"></a>
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="<?php echo e(asset('images/logo-default-196x47.png')); ?>" alt="" width="196" height="47"/></a></div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">

                                <!-- RD Navbar Search-->

                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="tipos.html">Tipos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="estadistica.html">Estadistica</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="plantacion.html">Plantacion</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo e(route('login')); ?>">Administración</a>
                                    </li>
                                </ul>
                            </div>                          
                        </div>
                        <!-- formulario login-->
                      
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
        <div class="swiper-wrapper text-left">
            <div class="swiper-slide context-dark" data-slide-bg="<?php echo e(asset('images/slider-1-1920x729.jpg')); ?>">
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
            <div class="swiper-slide context-dark" data-slide-bg="<?php echo e(asset('images/slider-2-1920x729.jpg')); ?>">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-center justify-content-xxl-start">
                            <div class="col-md-10 col-xxl-6">
                                <div class="slider-modern-box">
                                    <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft" data-caption-delay="0">Calidad</span></h1>
                                    <p data-caption-animate="fadeInRight" data-caption-delay="400">We control the process of farming at Herber to deliver the best organic products to our customers throughout the state.</p>
                                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="tipos.html" data-caption-animate="slideInLeft" data-caption-delay="400">Read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="<?php echo e(asset('images/slider-3-1920x729.jpg')); ?>">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-center justify-content-xxl-start">
                            <div class="col-md-10 col-xxl-6">
                                <div class="slider-modern-box">
                                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Clima</span></h1>
                                    <p data-caption-animate="fadeInRight" data-caption-delay="400">As the leading organic farm, we maintain an eco-friendly policy of growing and selling healthy food without any additives.</p>
                                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="tipos.html" data-caption-animate="slideInUp" data-caption-delay="400">Read more</a></div>
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
        <div class="parallax-container" data-parallax-img="<?php echo e(asset('images/bg-parallax-1.jpg')); ?>">
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
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo e(asset('images/team-11-370x406.jpg')); ?>" alt="" width="370" height="406"/></a>
                        <div class="team-classic-caption">
                            <h5 class="team-classic-name"><a href="#">Ryan Wilson</a></h5>
                            <p class="team-classic-status">Productor</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                    <!-- Team Classic-->
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo e(asset('images/team-22-370x406.jpg')); ?>" alt="" width="370" height="406"/></a>
                        <div class="team-classic-caption">
                            <h5 class="team-classic-name"><a href="#">Carmen Ortiz</a></h5>
                            <p class="team-classic-status">Productora</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
                    <!-- Team Classic-->
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo e(asset('images/team-33-370x406.jpg')); ?>" alt="" width="370" height="406"/></a>
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
        <div class="parallax-container" data-parallax-img="<?php echo e(asset('images/bg-parallax-2.jpg')); ?>">
            <div class="parallax-content section-xl context-dark bg-overlay-68">
                <div class="container">
                    <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">12</span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
                                </div>
                                <h6 class="counter-creative-title">Calidad de produccion</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">2</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                                </div>
                                <h6 class="counter-creative-title">Cantidad producida</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="counter-creative">
                                <div class="counter-creative-number"><span class="counter">679</span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
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
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-11-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-11-1200x800.jpg" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-11-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Floracion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-22-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e(asset('images/gallery-original-22-1200x800.jpg')); ?>" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-22-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Hojas</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-33-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e(asset('images/gallery-original-33-800x1200.jpg')); ?>" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-33-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Fumigacion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-44-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e(asset('images/gallery-original-44-800x1200.jpg')); ?>" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-44-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Medicion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-55-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e(asset('images/gallery-original-55-800x1200.jpg')); ?>" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-55-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Cosecha</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
                            <div class="thumbnail-mary-figure"><img src="<?php echo e(asset('images/grid-gallery-66-370x303.jpg')); ?>" alt="" width="370" height="303"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e(asset('images/gallery-original-66-1200x800.jpg')); ?>" data-lightgallery="item"><img src="<?php echo e(asset('images/grid-gallery-66-370x303.jpg')); ?>" alt="" width="370" height="303"/></a>
                                <h4 class="thumbnail-mary-title"><a href="#">Separacion</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="section section-banner" href="https://www.facebook.com/IngenieriaEnSistemasFivc" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="<?php echo e(asset('images/banner/foreground-03-1600x310.png')); ?>" srcset="<?php echo e(asset('images/banner/foreground-03-1600x310.png')); ?> 1x, <?php echo e(asset('images/banner/foreground-03-3200x620.png')); ?> 2x" alt="" width="1600" height="310"></a>
    <!-- Page Footer-->
    <footer class='section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark'>
        <div class='footer-variant-2-content'>
            <div class='container'>
                <div class='row row-40 justify-content-between'>
                    <div class='col-sm-6 col-lg-4 col-xl-3'>
                        <div class='oh-desktop'>
                            <div class='wow slideInRight' data-wow-delay='0s'>
                                <ul class='footer-contacts d-inline-block d-md-block'>
                                    <li>
                                        <div class='unit unit-spacing-xs'> </div>
                                    </li>
                                    <li>
                                        <div class='unit unit-spacing-xs'>
                                            <div class='unit-left'><span class='icon fa fa-phone'></span></div>
                                            <div class='unit-body'><a class='link-phone' href='tel:#'>3 9422317</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class='unit unit-spacing-xs'>
                                            <div class='unit-left'><span class='icon fa fa-clock-o'></span></div>
                                            <div class='unit-body'>
                                                <p>Lun-Vie: 08:00AM - 12:00PM y 02:00PM - 06:00PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class='unit unit-spacing-xs'>
                                            <div class='unit-left'><span class='icon fa fa-location-arrow'></span></div>
                                            <div class='unit-body'><a class='link-location' href='https://goo.gl/maps/adnRUQgnQPjvcFup6'>Facultad Integral de los Valles Cruceños UAGRM Av. Tecnologico y Ejercito</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-6 col-lg-4 col-xl-4'>
                        <div class='oh-desktop'>
                            <div class='inset-top-18 wow slideInDown' data-wow-delay='0s'>
                            </div>
                            <div class='footer-brand'><a href='index.html'><img src='<?php echo e(asset('images/logo-inverse-196x42.png')); ?>' alt='' width='196' height='42'/></a></div>
                            <p> SISEF-VGDA Es un sistema estadistico que permite analizar y centralizar la informacion que le es proporcionada. Y sacar de ellas concluciones válidas para la tomar de decisiones sobre la produccion fruticola basadas en el análisis previo.</p>
                        </div>
                    </div>
                    <div class='col-lg-3 col-xl-3'>
                        <div class='oh-desktop'>
                            <div class='inset-top-18 wow slideInLeft' data-wow-delay='0s'>
                                <h5>Galeria</h5>
                                <div class='row row-10 gutters-10' data-lightgallery='group'>
                                    <div class='col-6 col-sm-3 col-lg-6'>
                                        <!-- Thumbnail Classic-->
                                        <article class='thumbnail thumbnail-mary'>
                                            <div class='thumbnail-mary-figure'><img src='<?php echo e(asset('images/gallery-image-1-129x120.jpg')); ?>' alt='' width='129' height='120'/>
                                            </div>
                                            <div class='thumbnail-mary-caption'><a class='icon fl-bigmug-line-zoom60' href='<?php echo e(asset('images/gallery-original-7-800x1200.jpg')); ?>' data-lightgallery='item'><img src='<?php echo e(asset('images/gallery-image-1-129x120.jpg')); ?>' alt='' width='129' height='120'/></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class='col-6 col-sm-3 col-lg-6'>
                                        <!-- Thumbnail Classic-->
                                        <article class='thumbnail thumbnail-mary'>
                                            <div class='thumbnail-mary-figure'><img src='<?php echo e(asset('images/gallery-image-2-129x120.jpg')); ?>' alt='' width='129' height='120'/>
                                            </div>
                                            <div class='thumbnail-mary-caption'><a class='icon fl-bigmug-line-zoom60' href='<?php echo e(asset('images/gallery-original-8-1200x800.jpg')); ?>' data-lightgallery='item'><img src='<?php echo e(asset('images/gallery-image-2-129x120.jpg')); ?>' alt='' width='129' height='120'/></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class='col-6 col-sm-3 col-lg-6'>
                                        <!-- Thumbnail Classic-->
                                        <article class='thumbnail thumbnail-mary'>
                                            <div class='thumbnail-mary-figure'><img src='<?php echo e(asset('images/gallery-image-3-129x120.jpg')); ?>' alt='' width='129' height='120'/>
                                            </div>
                                            <div class='thumbnail-mary-caption'><a class='icon fl-bigmug-line-zoom60' href='<?php echo e(asset('images/gallery-original-9-800x1200.jpg')); ?>' data-lightgallery='item'><img src='<?php echo e(asset('images/gallery-image-3-129x120.jpg')); ?>' alt='' width='129' height='120'/></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class='col-6 col-sm-3 col-lg-6'>
                                        <!-- Thumbnail Classic-->
                                        <article class='thumbnail thumbnail-mary'>
                                            <div class='thumbnail-mary-figure'><img src='<?php echo e(asset('images/gallery-image-4-129x120.jpg')); ?>' alt='' width='129' height='120'/>
                                            </div>
                                            <div class='thumbnail-mary-caption'><a class='icon fl-bigmug-line-zoom60' href='<?php echo e(asset('images/gallery-original-10-1200x800.jpg')); ?>' data-lightgallery='item'><img src='<?php echo e(asset('images/gallery-image-4-129x120.jpg')); ?>' alt='' width='129' height='120'/></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='footer-variant-2-bottom-panel'>
            <div class='container'>
                <!-- Rights-->
                <div class='group-sm group-sm-justify'>
                    <p class='rights'><span class='copyright-year'>2021</span> SISEF-VGDA</p>
                    <p class='rights'>Desarrollado por: Luis Gabriel Buergo Barrionuevo<br>Samanda Colque Salasar &nbsp &nbsp &nbsp &nbsp &nbsp-&nbsp &nbsp &nbsp &nbsp &nbsp Farith Tapia</p>
                </div>
            </div>
        </div>
    </footer>    </div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/publica/index.blade.php ENDPATH**/ ?>