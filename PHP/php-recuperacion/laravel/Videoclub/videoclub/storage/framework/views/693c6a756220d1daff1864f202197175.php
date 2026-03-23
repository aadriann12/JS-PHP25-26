<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Películas</h1>
        <a href="<?php echo e(route('movies.create')); ?>" class="btn btn-primary mb-3">Agregar Película</a>

        // Mostrar mensaje de éxito después de una operación (crear, actualizar, eliminar)
        <?php if(session('success')): ?>

                <?php echo e(session('success')); ?>


        <?php endif; ?>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Director</th>
                    <th>Precio Alquiler</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($movie->id); ?></td>
                        <td><?php echo e($movie->titulo); ?></td>
                        <td><?php echo e($movie->anio); ?></td>
                        <td><?php echo e($movie->director->id); ?></td> <!-- Asumiendo que el modelo Director tiene un campo 'nombre' -->
                        <td><?php echo e($movie->precio_alquiler); ?></td>
                        <td>
<!-- Botones para ver, editar y eliminar película -->
                            <a href="<?php echo e(route('movies.show', $movie)); ?>" class="btn btn-info">Ver</a>

                            <a href="<?php echo e(route('movies.edit', $movie)); ?>" class="btn btn-warning">Editar</a>


                        <!-- Formulario para eliminar película -->
                            <form action="<?php echo e(route('movies.destroy', $movie)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/Videoclub/videoclub/resources/views/movies/index.blade.php ENDPATH**/ ?>