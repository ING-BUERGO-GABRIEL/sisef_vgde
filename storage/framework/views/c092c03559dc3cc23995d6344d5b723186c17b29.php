
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva productor</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('productor')); ?>" method="post">
                 <?php echo csrf_field(); ?>
                 <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required minlength="0" maxlength="50">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required minlength="0" maxlength="50">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimiento" placeholder="fechaNacimiento" required>
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad" required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Direccion</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" required minlength="0" maxlength="100">
                        </div>
                        <div class="form-group col col-lg-4">
                            <label for="exampleInputPassword1">Celular</label>
                            <input type="text" class="form-control" name="celular" placeholder="Celular" required minlength="0" maxlength="15">
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/productor/crear.blade.php ENDPATH**/ ?>