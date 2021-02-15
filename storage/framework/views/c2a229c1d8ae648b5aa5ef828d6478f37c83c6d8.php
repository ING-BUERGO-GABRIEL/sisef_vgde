<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<head>
    <title>SISEF-VGDA</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('libs/morris.css')); ?>">
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
<div class="page"><a class="section section-banner d-none d-xl-block" href="https://www.facebook.com/IngenieriaEnSistemasFivc" style="background-image: url(<?php echo e(asset('images/banner/background-04-1920x60.jpg')); ?>); background-image: -webkit-image-set( url(<?php echo e(asset('images/banner/background-04-1920x60.jpg')); ?>) 1x, url(<?php echo e(asset('images/banner/background-04-3840x120.jpg')); ?>) 2x )"><img src="<?php echo e(asset('images/banner/foreground-04-1600x60.png')); ?>" srcset="<?php echo e(asset('images/banner/foreground-04-1600x60.png')); ?> 1x, <?php echo e(asset('images/banner/foreground-04-3200x120.png')); ?> 2x" alt="" width="1600" height="310"></a>
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

                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo e(url('publica/home')); ?>">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo e(url('publica/tipos')); ?>">Tipos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo e(url('publica/estadis')); ?>">Datos</a>                              
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
 <?php echo $__env->yieldContent('contenido'); ?>
   <a class="section section-banner" href="https://www.facebook.com/IngenieriaEnSistemasFivc" style="background-image: url(<?php echo e(asset('images/banner/background-03-1920x310.jpg')); ?>); background-image: -webkit-image-set( url(<?php echo e(asset('images/banner/background-03-1920x310.jpg')); ?>) 1x, url(<?php echo e(asset('images/banner/background-03-3840x620.jpg')); ?>) 2x )"><img src="<?php echo e(asset('images/banner/foreground-03-1600x310.png')); ?>" srcset="<?php echo e(asset('images/banner/foreground-03-1600x310.png')); ?> 1x, <?php echo e(asset('images/banner/foreground-03-3200x620.png')); ?> 2x" alt="" width="1600" height="310"></a>
 
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
                            <div class='footer-brand'><a href='index.html'><img src="<?php echo e(asset('images/logo-inverse-196x42.png')); ?>" alt='' width='196' height='42'/></a></div>
                            <p> SISEF-VGDA Es un sistema de registro y administracion de datos de la produccion de durazno en vallegrande, que permite centralizar la informacion. Y sacar de ellas concluciones válidas para la tomar de decisiones sobre la produccion fruticola basadas en el análisis previo.</p>
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
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/core.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="<?php echo e(asset('libs/morris.min.js')); ?>" charset="utf-8"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="<?php echo e(asset('libs/linea.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\sisef_vgde\resources\views/publica/iniciomenu.blade.php ENDPATH**/ ?>