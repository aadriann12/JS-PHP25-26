<?php $__env->startSection('content'); ?>
  <h1><?php echo e($book->title); ?></h1>

  <p><strong>ISBN:</strong> <?php echo e($book->isbn ?? '-'); ?></p>
  <p><strong>Año:</strong> <?php echo e($book->published_year ?? '-'); ?></p>
  <p><strong>Autor:</strong> <?php echo e(optional($book->author)->name ?? '-'); ?></p>

  <p><strong>Categorías:</strong>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($book->categories->isEmpty()): ?>
      -
    <?php else: ?>
      <?php echo e($book->categories->pluck('name')->join(', ')); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </p>

  <p>
    <a href="<?php echo e(route('books.edit', $book)); ?>">Editar</a>
    <a href="<?php echo e(route('books.index')); ?>">Volver</a>
  </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\EjerciciosUT06\biblioteca_sin_login\resources\views/books/show.blade.php ENDPATH**/ ?>