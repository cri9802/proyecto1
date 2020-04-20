<?php $__env->startSection('contenido'); ?>

<div align="center" >
    <form class="formulario" role="form" action="<?php echo e(route('guardaempleados')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 
              <?php echo e(csrf_field()); ?>

    <div class="contenedor">
    <h2 class="h4 text-gray-900 mb-2" > REGISTRO USUARIO</h2>

        <?php if($errors->first('id_empleado')): ?>
        <i> <?php echo e($errors->first('id_empleado')); ?> </i>
        <?php endif; ?> 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="Clave" name="id_empleado" value="<?php echo e($id_emp); ?>" readonly='readonly'><br>
        </div>         


        <?php if($errors->first('nombre')): ?>
        <i> <?php echo e($errors->first('nombre')); ?> </i>
        <?php endif; ?> 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="Nombre" name="nombre" value="<?php echo e(old('nombre')); ?>">
        </div>
        <?php if($errors->first('app')): ?>
        <i> <?php echo e($errors->first('app')); ?> </i>
        <?php endif; ?> 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="app" name="app" value="<?php echo e(old('app')); ?>">
        </div>
        <?php if($errors->first('apm')): ?>
        <i> <?php echo e($errors->first('apm')); ?> </i>
        <?php endif; ?> 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="apm" name="apm" value="<?php echo e(old('apm')); ?>">
        </div>
        

              <?php if($errors->first('email')): ?>
              <i> <?php echo e($errors->first('email')); ?> </i>
              <?php endif; ?> 
              <div class="form-group">
              <input class="form-control form-control-user" type="text" placeholder="Usuario" name="email" value="<?php echo e(old('email')); ?>">
              </div>

              <?php if($errors->first('password')): ?>
              <i> <?php echo e($errors->first('password')); ?> </i>
              <?php endif; ?> 

            <form class="pure-form">
            <fieldset>

                <input type="password" class="form-control form-control-user" placeholder="Password" id="password"  name="password" value="<?php echo e(old('password')); ?>"> <br>


                <input type="password" class="form-control form-control-user" placeholder="Confirme Password" id="confirm_password"  name="confirm_password" value="<?php echo e(old('confirm_password')); ?>"> <br>

  </fieldset>
</form>
    </div>
          
          
          

  
      <input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
      <input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
  </form>
  </div>
</form></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>