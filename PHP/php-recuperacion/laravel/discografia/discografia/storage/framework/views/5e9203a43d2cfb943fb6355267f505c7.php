<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar Álbum</h1>
        <form action="<?php echo e(route('albums.update', $album->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?><!-- IMPORTANTE PARA QUE SEPA QUE ES UN UPDATE -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo e($album->titulo); ?>" required><!-- IMPORTANTE PARA QUE SE RELLENE EL CAMPO CON EL VALOR ACTUAL -->
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" name="anio" id="anio" class="form-control" value="<?php echo e($album->anio); ?>" required>
            </div>
            <div class="mb-3">
                <label for="artist_id" class="form-label">ID del Artista (<?php echo e($album->artist->nombre); ?>)</label>
                <input type="number" name="artist_id" id="artist_id" class="form-control" value="<?php echo e($album->artist_id); ?>" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="<?php echo e($album->precio); ?>" required>
            </div>
            <input type="submit" value="Actualizar Álbum" class="btn btn-primary">
            <a href="<?php echo e(route('albums.index')); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/discografia/discografia/resources/views/albums/edit.blade.php ENDPATH**/ ?>