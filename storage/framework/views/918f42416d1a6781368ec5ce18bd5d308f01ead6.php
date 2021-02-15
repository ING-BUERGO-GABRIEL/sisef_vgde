
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Destino Produccion</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('producdestinoproduc')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="card-body row">
                    <div class="form-group col col-lg-6">
                            <label for="exampleInputEmail1">id_produccion</label>
                            <input type="text" class="form-control" name="id_produccion" placeholder="id_produccion">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">id_destinoproduccion</label>
                            <input type="text" class="form-control" name="id_destinoproduccion" placeholder="id_destinoproduccion">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">porsentaje_destinado</label>
                            <input type="text" class="form-control" name="porsentaje_destinado" placeholder="porsentaje_destinado">
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/producdestinoproduc/crear.blade.php ENDPATH**/ ?>