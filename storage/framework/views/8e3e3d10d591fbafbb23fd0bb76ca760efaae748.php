
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Cambio climatico</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('produccioncambiosclimaticos')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row  col-sm-12 col-md-8 col-lg-8"> 
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Lugar Produccion</label>
                            <select class="form-control" name="id_produccion" id="id_produccion">
                               <?php $__currentLoopData = $produccion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->preciocaja_bs); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Cambio Climatico</label>
                            <select class="form-control" name="id_cambiosclimaticos" id="id_cambiosclimaticos">
                               <?php $__currentLoopData = $fenomenoclima; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!--<div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">id_cambiosclimaticos</label>
                            <input type="text" class="form-control" name="id_cambiosclimaticos" placeholder="id_cambiosclimaticos">
                        </div>-->
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/produccioncambiosclimaticos/crear.blade.php ENDPATH**/ ?>