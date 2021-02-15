
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Productor</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="<?php echo e(url('productor/create')); ?>" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Nacionalidad</th>
                        <th>Direccion</th>
                        <th>Celular</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $productor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->nombre); ?></td>
                        <td><?php echo e($data->apellidos); ?></td>
                        <td><?php echo e($data->fechaNacimiento); ?></td>
                        <td><?php echo e($data->nacionalidad); ?></td>
                        <td><?php echo e($data->direccion); ?></td>
                        <td><?php echo e($data->celular); ?></td>
                        <td>
                            <form id="eliminar<?php echo e($data->id); ?>" action="<?php echo e(url('/productor/delete/' . $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('productor/'.$data->id.'/edit')); ?>" class="btn btn-outline-warning btn-sm">
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
                <div class="pagination justify-content-start mt-2">
                    <?php if($productor->lastPage() > 1): ?>
                        <ul class="pagination justify-content-center page1-links">
                            <?php if(!($productor->currentPage() == 1)): ?>
                                <li class="page-item prev">
                                    <a class="<?php echo e(($productor->currentPage() == 1) ? ' ' : 'disabled'); ?> page-link"
                                       href="<?php echo e($productor->url(1)); ?>">Atras</a>
                                </li>
                            <?php endif; ?>
                            <?php for($i = 1; $i <= $productor->lastPage(); $i++): ?>
                                <li class="page-item <?php echo e(($productor->currentPage() == $i) ? 'active' : ''); ?> ">
                                    <a class=" page-link <?php echo e(($productor->currentPage() == $i) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($productor->url($i)); ?>"><?php echo e($i); ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if(!($productor->currentPage() == $productor->lastpage())): ?>
                                <li class="page-item next">
                                    <a class="page-link <?php echo e(($productor->currentPage() == $productor->lastpage()) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($productor->url($productor->currentPage()+1)); ?>">Siguiente</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/confirmacion-eliminacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisef_vgde\resources\views/productor/inicio.blade.php ENDPATH**/ ?>