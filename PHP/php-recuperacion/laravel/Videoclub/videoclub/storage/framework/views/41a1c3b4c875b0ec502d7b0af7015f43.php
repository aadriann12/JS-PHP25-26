<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Bienvenido al Videoclub</h1>
        <p>Explora nuestra colección de películas y disfruta de una experiencia cinematográfica única.</p>
    <a href="<?php echo e(url('/movies')); ?>" class="btn btn-primary">Ver Películas</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/Videoclub/videoclub/resources/views/index.blade.php ENDPATH**/ ?>