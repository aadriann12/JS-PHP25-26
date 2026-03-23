<?php $__env->startSection('content'); ?>
  <div class="container">
    <h1>Agregar Nueva Película</h1>
    <form action="<?php echo e(route('movies.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="anio" class="form-label">Año</label>
        <input type="number" name="anio" id="anio" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="director_id" class="form-label">Director ID</label>
        <input type="number" name="director_id" id="director_id" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="precio_alquiler" class="form-label">Precio Alquiler</label>
        <input type="number" step="0.01" name="precio_alquiler" id="precio_alquiler" class="form-control" required>
      </div>
      <input type="submit" value="Agregar Película" class="btn btn-primary">
      <a href="<?php echo e(route('movies.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/Videoclub/videoclub/resources/views/movies/create.blade.php ENDPATH**/ ?>