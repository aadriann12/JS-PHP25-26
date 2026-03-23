<?php $__env->startSection('content'); ?>
<h1>Listado de coches</h1>
<a href="<?php echo e(route('cars.create')); ?>">Crear nuevo coche</a>
<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($car->modelo); ?></h2>
    <p><?php echo e($car->chasis); ?></p>
    <p><?php echo e($car->category->name); ?></p>
    <a href="<?php echo e(route('cars.edit',$car)); ?>">Editar</a>
   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/f1/f1/resources/views/cars/index.blade.php ENDPATH**/ ?>