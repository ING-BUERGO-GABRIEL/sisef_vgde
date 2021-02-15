
<?php $__env->startSection('contenido'); ?>
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
          <div class="box-position" style="background-image:url(<?php echo e(asset('images/bg-breadcrumbs3.jpg')); ?>);"></div>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-sm section-first bg-default text-left">
        <div class="container">
          <div class="row row-30 justify-content-center">
           <?php $__currentLoopData = $tipodurazno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='col-sm-12 col-md-8 col-lg-8'>
            <li>
              <h2><?php echo e($data->nombre_comun); ?></h2>
              <h4><?php echo e($data->nombre_cientifico); ?></h4>
              <p><?php echo e($data->descripcion); ?></p>
            </li>
            
          </div>
            <div class='col-sm-12 col-md-4 col-lg-4'>
            <img src="<?php echo e(asset($data->foto)); ?>" alt='' width='300px' height='400px'/>
            </div>  

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
          </div>
      </div>
      </section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('publica.iniciomenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/publica/tipo.blade.php ENDPATH**/ ?>