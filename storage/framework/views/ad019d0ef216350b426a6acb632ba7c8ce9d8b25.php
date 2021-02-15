
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nuevo rol</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('usuario')); ?>" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Nombre">
                            </div>
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputPassword1">Descripción corta</label>
                                <input type="email" class="form-control" name="email"
                                       placeholder="ejemplo@ejemplo.com">
                            </div>
                            <div class="form-group col col-lg-6 col-sm-12 col-mb-12">
                                <label for="exampleInputPassword1">Descripción corta</label>
                                <input type="text" class="form-control" name="password"
                                       placeholder="**********">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label>Seleccione el rol</label>
                                <select  name="roles[]"
                                        style="width: 100%;">
                                    
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($name); ?>" <?php echo e(in_array($name, old('abilities', [])) ? 'checked' : ''); ?>><?php echo e($name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/usuario/crear.blade.php ENDPATH**/ ?>