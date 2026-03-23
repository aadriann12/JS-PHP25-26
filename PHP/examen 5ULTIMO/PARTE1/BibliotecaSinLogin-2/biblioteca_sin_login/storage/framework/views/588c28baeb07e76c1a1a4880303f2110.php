<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php echo $__env->yieldContent('title', 'Biblioteca'); ?></title>
</head>
<body>
  <nav>
    <a href="<?php echo e(route('books.index')); ?>">Libros</a> |
    <a href="<?php echo e(route('authors.index')); ?>">Autores</a> |
    <a href="<?php echo e(route('categories.index')); ?>">Categorías</a>
  </nav>

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
    <div role="alert">
      <?php echo e(session('message')); ?>

    </div>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\EjerciciosUT06\biblioteca_sin_login\resources\views/layouts/app.blade.php ENDPATH**/ ?>