<?php $__env->startSection('title', __('Duplicate IDs')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <div class="flex items-center justify-between">
            <h1><?php echo e(__('Duplicate IDs')); ?></h1>
        </div>
    </header>

    <?php if($duplicates->isEmpty()): ?>
        <div class="card flex items-center">
            <?php echo e(__('No items with duplicate IDs.')); ?>

        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $duplicates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $paths): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h6 class="mt-4"><?php echo e($id); ?></h6>

        <div class="card p-0 mt-1">
            <table class="data-table">
                <?php $__currentLoopData = $paths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="font-mono text-xs">
                            <?php echo e($path); ?>

                        </td>
                        <td class="text-right text-2xs">
                            <form method="POST" action="<?php echo e(cp_route('duplicates.regenerate')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="path" value="<?php echo e($path); ?>" />
                                <button class="text-blue"><?php echo e(__('Regenerate')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/duplicates.blade.php ENDPATH**/ ?>