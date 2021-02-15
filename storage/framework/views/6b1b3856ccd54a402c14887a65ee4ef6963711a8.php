
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Proveedor</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('proveedor')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="card-body row">
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>                       
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Direccion</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Telefono</label>
                            <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/proveedor/crear.blade.php ENDPATH**/ ?>