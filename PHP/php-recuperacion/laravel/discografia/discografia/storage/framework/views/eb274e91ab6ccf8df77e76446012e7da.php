<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Detalles del Álbum</h1>
        <div class="card">
            <div class="card-body">
                <h2><?php echo e($album->titulo); ?></h2>
                <p><strong>Año:</strong> <?php echo e($album->anio); ?></p>
                <p><strong>Artista:</strong> <?php echo e(optional($album->artist)->nombre ?? 'Desconocido'); ?></p>
                <p><strong>Precio:</strong> <?php echo e(number_format($album->precio, 2)); ?> €</p>
                <a href="<?php echo e(route('albums.index')); ?>" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/discografia/discografia/resources/views/albums/show.blade.php ENDPATH**/ ?>