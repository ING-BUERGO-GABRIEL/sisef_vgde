
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="row justify-content-center col-lg-12">
                        <h5 class="m-0"><strong>PRODUCCION</strong> - CAMBIOS CLIMATICOS - DESTINO PRODUCCION - PLAGAS</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('produccion')); ?>" method="post">
                 <?php echo csrf_field(); ?>
                 <div class="row justify-content-center col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body row col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Plantacion</label>
                            <select class="form-control" name="id_plantacion" id="id_plantacion">
                               <?php $__currentLoopData = $plantacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                               <option value="<?php echo e($data->idpla); ?>"><?php echo e($data->municipio); ?> - <?php echo e($data->nompro); ?> <?php echo e($data->ape); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Encuestador</label>
                            <select class="form-control" name="id_encuestador" id="id_encuestador">
                               <?php $__currentLoopData = $encuestador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                  <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre); ?> <?php echo e($data->apellidos); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputEmail1">Tipo durazno</label>
                            <select class="form-control" name="id_tipo_durazno" id="id_tipo_durazno">
                               <?php $__currentLoopData = $tipodurazno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                 <option value="<?php echo e($data->id); ?>"><?php echo e($data->nombre_comun); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Diametro Promedio (centimetros)</label>
                            <input type="number" class="form-control" name="diametropromedio" placeholder="diametropromedio"required min="0" max="999999" step=".01">
                        </div>
                        <input type="hidden" class="form-control" name="id_usuario" placeholder="id_usuario" value="<?php echo e(auth()->user()->id); ?>">                    
                        
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Fecha de Produccion</label>
                            <input type="date" class="form-control" name="fechaproduccion" placeholder="fechaproduccion"required>
                        </div>
                         <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Cantidad de Cajas</label>
                            <input type="number" class="form-control" name="cantidadcajas" placeholder="cantidadcajas"required min="0" max="999999" >
                        </div>
                        <div class="form-group col col-sm-auto col-md-6 col-lg-64">
                            <label for="exampleInputPassword1">Preciopor Por Caja (bs)</label>
                            <input type="number" class="form-control" name="preciocaja_bs" placeholder="preciocaja_bs" required min="0" max="999999" step=".01">
                        </div>                  
                        <div class="form-group col col-sm-auto col-md-6 col-lg-6">
                            <label for="exampleInputPassword1">Costo total Produccion</label>
                            <input type="number" class="form-control" name="costoproduccion" placeholder="costoproduccion"required min="0" max="999999" step=".01">
                        </div>

                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                         <a href="<?php echo e(url('produccion')); ?>" class="btn btn-danger">Cancelar</a> 
                        <button type="submit" class="btn btn-primary  float-right">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/produccion/crear.blade.php ENDPATH**/ ?>