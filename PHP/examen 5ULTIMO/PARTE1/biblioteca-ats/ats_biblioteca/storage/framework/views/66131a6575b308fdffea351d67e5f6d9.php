<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestión préstamos</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
                        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-medium">Todos los préstamos</p>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($loans->count() === 0): ?>
                        <p class="text-gray-600">No hay préstamos registrados.</p>
                    <?php else: ?>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead>
                                    <tr class="border-b text-left bg-gray-50">
                                        <th class="py-3 px-4">Usuario</th>
                                        <th class="py-3 px-4">Libro</th>
                                        <th class="py-3 px-4">Estado</th>
                                        <th class="py-3 px-4">Solicitado</th>
                                        <th class="py-3 px-4">Aprobado</th>
                                        <th class="py-3 px-4">Vencimiento</th>
                                        <th class="py-3 px-4">Devuelto</th>
                                        <th class="py-3 px-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="font-medium"><?php echo e($loan->user->name ?? '—'); ?></div>
                                                <div class="text-xs text-gray-500"><?php echo e($loan->user->email ?? '—'); ?></div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="font-medium"><?php echo e($loan->book->title ?? '—'); ?></div>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($loan->notes): ?>
                                                    <div class="text-xs text-gray-500">Notas: <?php echo e(Str::limit($loan->notes, 50)); ?></div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </td>
                                            <td class="py-3 px-4">
                                                <span class="px-2 py-1 rounded text-xs font-medium
                                                    <?php if($loan->status === 'pending'): ?> bg-yellow-100 text-yellow-800
                                                    <?php elseif($loan->status === 'approved'): ?> bg-green-100 text-green-800
                                                    <?php elseif($loan->status === 'rejected'): ?> bg-red-100 text-red-800
                                                    <?php elseif($loan->status === 'returned'): ?> bg-blue-100 text-blue-800
                                                    <?php else: ?> bg-gray-100 text-gray-800 <?php endif; ?>">
                                                    <?php echo e(ucfirst($loan->status)); ?>

                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                <?php echo e($loan->created_at ? $loan->created_at->format('d/m/Y') : '—'); ?>

                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                <?php echo e($loan->loaned_at ? \Carbon\Carbon::parse($loan->loaned_at)->format('d/m/Y') : '—'); ?>

                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                <?php echo e($loan->due_at ? \Carbon\Carbon::parse($loan->due_at)->format('d/m/Y') : '—'); ?>

                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                <?php echo e($loan->returned_at ? \Carbon\Carbon::parse($loan->returned_at)->format('d/m/Y') : '—'); ?>

                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex gap-2">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($loan->status === 'pending'): ?>
                                                        <form action="<?php echo e(route('loans.approve', $loan)); ?>" method="POST" class="inline">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="text-xs bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700"
                                                                    onclick="return confirm('¿Aprobar préstamo?')">
                                                                Aprobar
                                                            </button>
                                                        </form>
                                                        <form action="<?php echo e(route('loans.reject', $loan)); ?>" method="POST" class="inline">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="text-xs bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700"
                                                                    onclick="return confirm('¿Rechazar préstamo?')">
                                                                Rechazar
                                                            </button>
                                                        </form>
                                                    <?php elseif($loan->status === 'approved' && $loan->returned_at === null): ?>
                                                        <form action="<?php echo e(route('loans.return', $loan)); ?>" method="POST" class="inline">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="text-xs bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700"
                                                                    onclick="return confirm('¿Marcar como devuelto?')">
                                                                Devolver
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <span class="text-xs text-gray-400">—</span>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6">
                            <?php echo e($loans->links()); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Users/adrian12/Documents/JS-PHP25-26/PHP/biblioteca-ats/ats_biblioteca/resources/views/loans/all.blade.php ENDPATH**/ ?>