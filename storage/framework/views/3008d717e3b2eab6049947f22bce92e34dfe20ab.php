
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0">PRODUCCION - <strong>CAMBIOS CLIMATICOS</strong> - DESTINO PRODUCCION - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="row col-lg-12">
            <div class="card-body col-lg-6">
           <form action="<?php echo e(url('produccioncambiosclimaticos/actualizar/'.$idpro)); ?>" method="post">
                <?php echo csrf_field(); ?>        
                    <div class="card-body row  col-sm-12 col-md-8 col-lg-12">                         
                        <input type="hidden" class="form-control" name="id_produccion" value="<?php echo e($idpro); ?>">                    
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Cambio Climatico</label>
                            <select class="form-control" name="id_cambiosclimaticos" id="id_cambiosclimaticos">
                               <?php $__currentLoopData = $fenomenoclima; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>                        
                        <div class="form-group col col-sm-12 col-md-12 col-lg-6">
                            <label for="exampleInputPassword1">Fecha</label>
                            <input type="date" class="form-control" name="fecha" placeholder="fecha" required>
                        </div>                        
                    </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">                        
                        <a href="<?php echo e(url('produccion')); ?>" class="btn btn-danger">Cancelar</a> 
                        <a href="<?php echo e(url('producdestinoproduc/'.$idpro)); ?>" class="btn btn-primary float-right">Siguiente</a>                        
                        <button type="submit" class="btn btn-success float-right">Guardar</button>                        
                    </div>                     
                </form>
            </div>
            <div class="card-body col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Clima</th>
                        <th>Fecha</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $produccioncambiosclimaticos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->nomcli); ?></td>
                        <td><?php echo e($data->fecha); ?></td>
                        <td>
                            <form id="eliminar<?php echo e($data->idcam); ?>" action="<?php echo e(url('/produccioncambiosclimaticos/delete/'.$data->idcam.'/'.$idpro)); ?>" method="post">
                                <?php echo csrf_field(); ?>                               
                                <button type="button" onclick="confirmEliminar(<?php echo e($data->idcam); ?>)" class="btn btn-outline-danger btn-sm">
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
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/produccioncambiosclimaticos/inicio.blade.php ENDPATH**/ ?>