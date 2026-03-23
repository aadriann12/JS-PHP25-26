<?php $__env->startSection('content'); ?>
    <h1>Create Note</h1>
    <form action="<?php echo e(route('notes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>" required>
        </div>
        <div>@old
            <label for="description">Description:</label>
            <textarea id="description" name="description"><?php echo e(old('description')); ?></textarea>
        </div>
        <button type="submit">Create Note</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/PHP/examen 5ULTIMO/PARTE1/ej1/notas/notas/resources/views/notes/create.blade.php ENDPATH**/ ?>