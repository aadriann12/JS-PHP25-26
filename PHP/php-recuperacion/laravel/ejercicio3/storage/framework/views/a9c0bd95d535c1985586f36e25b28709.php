<?php $__env->startSection('content'); ?>
<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 2rem; display: flex; align-items: center; gap: 1rem;">
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-outline" style="padding: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </a>
        <h1>Editar Libro: <?php echo e($book->title); ?></h1>
    </div>

    <div class="card">
        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="form-group">
                <label for="title">Título del Libro</label>
                <input type="text" name="title" id="title" value="<?php echo e($book->title); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción / Sinopsis</label>
                <textarea name="description" id="description" rows="4" required><?php echo e($book->description); ?></textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label for="author_id">Autor</label>
                    <select name="author_id" id="author_id" required>
                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($author->id); ?>" <?php echo e($book->author_id == $author->id ? 'selected' : ''); ?>>
                                <?php echo e($author->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select name="category_id" id="category_id" required>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($book->category_id == $category->id ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="publication_year">Año de Publicación</label>
                <input type="number" name="publication_year" id="publication_year" min="1000" max="<?php echo e(date('Y')); ?>" value="<?php echo e($book->publication_year); ?>" required>
            </div>

            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <button type="submit" class="btn btn-primary" style="flex: 1;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    Actualizar Libro
                </button>
                <a href="<?php echo e(route('books.index')); ?>" class="btn btn-outline">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/RECUPERACION/php/laravel/ejercicio3/resources/views/books/edit.blade.php ENDPATH**/ ?>