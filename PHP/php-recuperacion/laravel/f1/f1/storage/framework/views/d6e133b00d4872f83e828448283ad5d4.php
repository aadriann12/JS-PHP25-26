<?php $__env->startSection('content'); ?>
  <h1>Editar coche</h1>
  <form action=<?php echo e(route('cars.update',$car)); ?> method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<input type="text" name="modelo" value="<?php echo e(old('modelo',$car->modelo)); ?>">
<input type="text" name="chasis" value="<?php echo e(old('chasis',$car->chasis)); ?>">
<select name="category_id">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id',$car->category_id)==$category->id?'selected':''); ?>><?php echo e($category->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<label for="pilots">Pilotos</label>
<select name="pilots[]" multiple>
    <?php $__currentLoopData = $pilots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pilot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($pilot->id); ?>"
<?php echo e($car->pilots->contains($pilot->id) ? 'selected' : ''); ?>><?php echo e($pilot->nombre); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<button type="submit">Enviar</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/f1/f1/resources/views/cars/edit.blade.php ENDPATH**/ ?>