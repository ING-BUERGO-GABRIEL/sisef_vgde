
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - CAMBIOS CLIMATICOS - <strong>DESTINO PRODUCCION</strong> - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
            <div class="card-body col-lg-6">
             <form action="<?php echo e(url('producdestinoproduc/actualizar/'.$idpro)); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="card-body row">                        
                       <input type="hidden" class="form-control" name="id_produccion" value="<?php echo e($idpro); ?>">                     
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Destinoproduccion</label>
                            <select class="form-control" name="id_destinoproduccion" id="id_destinoproduccion">
                               <?php $__currentLoopData = $destinoproduccion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->destino); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">porsentaje_destinado</label>
                            <input type="number" class="form-control" name="porsentaje_destinado" placeholder="porsentaje_destinado" required min="1" max="100">
                        </div>
                    </div>
                   <div class="card-footer">                        
                        <a href="<?php echo e(url('produccion')); ?>" class="btn btn-danger">Cancelar</a> 
                        <a href="<?php echo e(url('plagaproduccions/'.$idpro)); ?>" class="btn btn-primary float-right">Siguiente</a>                        
                        <button type="submit" class="btn btn-success float-right">Guardar</button>                        
                    </div>                     
                </form>
            </div>
            <div class="card-body col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Destino de Produccion</th>
                        <th>Porcentaje destinado</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $producdestinoproduc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->nompro); ?></td>
                        <td><?php echo e($data->ape); ?></td>
                        <td>
                        <form id="eliminar<?php echo e($data->idpro); ?>" action="<?php echo e(url('/producdestinoproduc/delete/'.$data->idpro.'/'.$idpro)); ?>" method="post">
                                <?php echo csrf_field(); ?>                              
                                <button type="button" onclick="confirmEliminar(<?php echo e($data->idpro); ?>)" class="btn btn-outline-danger btn-sm">
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
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/confirmacion-eliminacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/producdestinoproduc/inicio.blade.php ENDPATH**/ ?>