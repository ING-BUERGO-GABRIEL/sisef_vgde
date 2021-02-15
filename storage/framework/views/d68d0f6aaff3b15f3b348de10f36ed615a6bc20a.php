
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Editar tipo durazno</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('tipodurazno/actualizar/'.$tipodurazno->id)); ?>" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body row">
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputEmail1">Nombre común</label>
                            <input type="text" class="form-control" name="nombre_comun" value="<?php echo e($tipodurazno->nombre_comun); ?>"  placeholder="Nombre común">
                        </div>
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputPassword1">Nombre científico</label>
                            <input type="text" class="form-control" name="nombre_cientifico" value="<?php echo e($tipodurazno->nombre_cientifico); ?>" placeholder="Nombre científico">
                        </div>
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputPassword1">Descripción</label>
                            <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion"><?php echo e($tipodurazno->descripcion); ?></textarea>
                        </div>
                        <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                            <label for="exampleInputPassword1">Imagen</label>
                            <input type="file" class="form-control" name="imagen" value="<?php echo e($tipodurazno->imagen); ?>"  placeholder="Imagen">
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/tipodurazno/editar.blade.php ENDPATH**/ ?>