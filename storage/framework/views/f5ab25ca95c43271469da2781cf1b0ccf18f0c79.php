
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                     <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - CAMBIOS CLIMATICOS - DESTINO PRODUCCION - <strong>PLAGAS</strong></h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
              <div class="card-body col-lg-6">
                <form action="<?php echo e(url('plagaproduccions/actualizar/'.$idpro)); ?>" method="post">
                  <?php echo csrf_field(); ?>                    
                     <div class="card-body row">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plaga</label>
                            <select class="form-control" name="id_plaga">
                               <?php $__currentLoopData = $plaga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>        
                     
                         <input type="hidden" class="form-control" name="id_produccion" value="<?php echo e($idpro); ?>">
                                         
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Superficie Afectada</label>
                            <input type="number" class="form-control" name="superficieafectada_ha" placeholder="Superficie Afectada ha" required min="0" max="10000000000">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Obserbaciones</label>
                            <textarea type="text" class="form-control" name="obserbaciones" placeholder="Obserbaciones" required minlength="0" maxlength="500"></textarea>
                        </div>
                     </div>
                    <!-- /.card-body -->
                
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
                        <th>Plaga</th>
                        <th>Superficie afectada</th>
                        <th>Fecha</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $plagaproduccions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->nombre); ?></td> 
                        <td><?php echo e($data->superficie); ?></td>
                        <td><?php echo e($data->fecha); ?></td>
                        <td>
                            <form id="eliminar<?php echo e($data->idplagap); ?>" action="<?php echo e(url('/plagaproduccions/delete/' . $data->idplagap)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('plagaproduccions/'.$data->idplagap.'/edit')); ?>" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar(<?php echo e($data->idplagap); ?>)" class="btn btn-outline-danger btn-sm">
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/plagaproduccions/inicio.blade.php ENDPATH**/ ?>