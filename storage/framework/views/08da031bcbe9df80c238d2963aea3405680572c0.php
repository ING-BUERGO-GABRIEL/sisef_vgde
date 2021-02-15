
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Plantación</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="<?php echo e(url('plantacion/create')); ?>" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>IdLugar</th>
                        <th>IdProveedor</th>
                        <th>IdSisPrevencion</th>
                        <th>IdProductor</th>
                        <th>TipoRiego</th>
                        <th>TipoAbono</th>
                        <th>CantPlantines</th>
                        <th>Extension</th>
                        <th>Fecha Plantacion</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $plantacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->id_lugar); ?></td>
                        <td><?php echo e($data->id_proveedor); ?></td>
                        <td><?php echo e($data->id_sis_prevencion); ?></td>
                        <td><?php echo e($data->id_productor); ?></td>
                        <td><?php echo e($data->tiporiego); ?></td>
                        <td><?php echo e($data->tipoabono); ?></td>
                        <td><?php echo e($data->cantidadplantine_ha); ?></td>
                        <td><?php echo e($data->extencion_ha); ?></td>
                        <td><?php echo e($data->fechaplantacion); ?></td>
                        <td>
                        <form id="eliminar<?php echo e($data->id); ?>" action="<?php echo e(url('/plantacion/delete/'.$data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('plantacion/'.$data->id.'/edit')); ?>" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar(<?php echo e($data->id); ?>)" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>                   
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/confirmacion-eliminacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/plantacion/inicio.blade.php ENDPATH**/ ?>