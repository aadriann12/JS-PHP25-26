<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="header">
            <div class="brand">
                <div class="logo">A</div>
                <div>
                    <h1>Álbumes</h1>
                    <p class="muted">Colección de discos</p>
                </div>
            </div>
            <div class="nav">
                <a href="<?php echo e(route('albums.create')); ?>" class="btn primary">Nuevo Álbum</a>
            </div>
        </div>

   

        <div class="card">
            <?php if($albums->isEmpty()): ?>
                <div class="empty">No hay álbumes todavía.</div>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Año</th>
                            <th>Artista</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($album->id); ?></td>
                                <td><?php echo e($album->titulo); ?></td>
                                <td><?php echo e($album->anio); ?></td>
                                <td><?php echo e(optional($album->artist)->nombre ?? '-'); ?></td>
                                <td><?php echo e(number_format($album->precio, 2)); ?></td>
                                <td>
                                    <a href="<?php echo e(route('albums.show', $album)); ?>" class="btn info">Ver</a>
                                    <a href="<?php echo e(route('albums.edit', $album)); ?>" class="btn warning">Editar</a>
                                    <form action="<?php echo e(route('albums.destroy', $album)); ?>" method="POST" style="display:inline-block;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn danger" onclick="return confirm('¿Seguro que quieres eliminar este álbum?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/discografia/discografia/resources/views/albums/index.blade.php ENDPATH**/ ?>