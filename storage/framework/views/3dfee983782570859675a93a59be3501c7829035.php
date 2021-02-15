
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Usuarios</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="<?php echo e(url('usuario/create')); ?>" type="button"
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
                        <th>Titulo</th>
                        <th>Permiso</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($usuario->name); ?></td>
                            <td><?php echo e($usuario->email); ?></td>
                            <td>
                                <?php $__currentLoopData = $usuario->roles->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($role); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <form id="eliminar<?php echo e($usuario->id); ?>" action="<?php echo e(url('/usuario/delete/' . $usuario->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
<!--                                    <a href="<?php echo e(url('/usuario/'.$usuario->id.'/edit')); ?>" class="btn btn-outline-warning btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>-->
                                    <button type="button" onclick="confirmEliminar(<?php echo e($usuario->id); ?>)" class="btn btn-outline-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="pagination justify-content-start mt-2">
                    <?php if($usuarios->lastPage() > 1): ?>
                        <ul class="pagination justify-content-center page1-links">
                            <?php if(!($usuarios->currentPage() == 1)): ?>
                                <li class="page-item prev">
                                    <a class="<?php echo e(($usuarios->currentPage() == 1) ? ' ' : 'disabled'); ?> page-link"
                                       href="<?php echo e($usuarios->url(1)); ?>">Atras</a>
                                </li>
                            <?php endif; ?>
                            <?php for($i = 1; $i <= $usuarios->lastPage(); $i++): ?>
                                <li class="page-item <?php echo e(($usuarios->currentPage() == $i) ? 'active' : ''); ?> ">
                                    <a class=" page-link <?php echo e(($usuarios->currentPage() == $i) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($usuarios->url($i)); ?>"><?php echo e($i); ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if(!($roles->currentPage() == $usuarios->lastpage())): ?>
                                <li class="page-item next">
                                    <a class="page-link <?php echo e(($usuarios->currentPage() == $usuarios->lastpage()) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($usuarios->url($usuarios->currentPage()+1)); ?>">Siguiente</a>
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/usuario/inicio.blade.php ENDPATH**/ ?>