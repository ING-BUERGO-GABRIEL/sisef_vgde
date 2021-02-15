
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Plantación</h5>
                    </div>

                </div>
            </div>
            <div class="card-body ">
                <form action="<?php echo e(url('plantacion')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">               
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Lugar Plantacion</label>
                            <select class="form-control" name="id_lugar" id="id_lugar">
                               <?php $__currentLoopData = $lugarplantacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->municipio); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Proveedor</label>
                            <select class="form-control" name="id_proveedor" id="id_proveedor">
                               <?php $__currentLoopData = $proveedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">id_sis_prevencion</label>
                            <input type="text" class="form-control" name="id_sis_prevencion">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">id_productor</label>
                            <input type="text" class="form-control" name="id_productor">
                        </div><div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">tiporiego</label>
                            <input type="text" class="form-control" name="tiporiego">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">tipoabono</label>
                            <input type="text" class="form-control" name="tipoabono">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">cantidadplantine_ha</label>
                            <input type="text" class="form-control" name="cantidadplantine_ha">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">extencion_ha</label>
                            <input type="text" class="form-control" name="extencion_ha">
                        </div>
                        <div class="form-group col col-sm-12 col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">fechaplantacion</label>
                            <input type="date" class="form-control" name="fechaplantacion">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->


                    </tbody>                   
                </table>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/plantacion/crear.blade.php ENDPATH**/ ?>