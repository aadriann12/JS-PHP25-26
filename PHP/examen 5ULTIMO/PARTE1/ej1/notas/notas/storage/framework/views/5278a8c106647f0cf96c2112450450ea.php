 <?php $__env->startSection('content'); ?>
  <h1>Notes List</h1>
  <a href="<?php echo e(route('notes.create')); ?>">Create New Note</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
               <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($note->title); ?></td>
                    <td><?php echo e($note->description); ?></td>
                    <td> <button><a href="<?php echo e(route('notes.edit', $note->id)); ?>">Edit</a></button>
                    <form action="<?php echo e(route('notes.destroy', $note->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Delete</button>
                    </form>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/PHP/examen 5ULTIMO/PARTE1/ej1/notas/notas/resources/views/notes/index.blade.php ENDPATH**/ ?>