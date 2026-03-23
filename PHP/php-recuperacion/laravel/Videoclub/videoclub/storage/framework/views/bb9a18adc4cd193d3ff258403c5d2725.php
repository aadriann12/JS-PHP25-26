<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($movie->titulo); ?></h1>
        <p><strong>Año:</strong> <?php echo e($movie->anio); ?></p>
        <p><strong>Director:</strong> <?php echo e($movie->director->nombre); ?></p> <!-- Asumiendo que el modelo Director tiene un campo 'nombre' -->
        <p><strong>Precio de Alquiler:</strong> <?php echo e($movie->precio_alquiler); ?></p>
        <a href="<?php echo e(route('movies.index')); ?>" class="btn btn-secondary">Volver a la lista</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/Videoclub/videoclub/resources/views/movies/show.blade.php ENDPATH**/ ?>