<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Discografía'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/discografia.css')); ?>">
</head>
<body>
<?php if(session('success')): ?>
    <div class="alert"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/discografia/discografia/resources/views/layouts/app.blade.php ENDPATH**/ ?>