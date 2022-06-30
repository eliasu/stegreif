<?php $__env->startSection('title', __('Updater')); ?>

<?php $__env->startSection('content'); ?>

    <?php if($requestError): ?>

        <div class="no-results md:pt-8 max-w-2xl mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2">
                    <h1 class="mb-4"><?php echo e(__('Updates')); ?></h1>
                    <p class="text-grey-70 leading-normal mb-4 text-lg antialiased">
                        <?php echo e(__('statamic::messages.outpost_issue_try_later')); ?>

                    </p>
                    <a href="<?php echo e(cp_route('updater')); ?>"
                        class="btn-primary btn-lg"><?php echo e(__('Try again')); ?></a>
                </div>
                <div class="hidden md:block w-1/2 pl-6">
                    <?php echo Statamic::svg('empty/navigation') ?>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div class="flex mb-3">
            <h1 class="flex-1"><?php echo e(__('Updates')); ?></h1>
        </div>

        <h6 class="mt-4">Core</h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <tr>
                    <td class="w-64"><a href="<?php echo e(route('statamic.cp.updater.product', 'statamic')); ?>" class="text-blue font-bold">Statamic</a></td>
                    <td><?php echo e($statamic->currentVersion()); ?></td>
                    <?php if($count = $statamic->availableUpdatesCount()): ?>
                        <td class="text-right"><span class="badge-sm bg-green btn-sm"><?php echo e(trans_choice('1 update|:count updates', $count)); ?></span></td>
                    <?php else: ?>
                        <td class="text-right"><?php echo e(__('Up to date')); ?></td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>

        <h6 class="mt-4"><?php echo e(__('Addons')); ?></h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="w-64"><a href="<?php echo e(route('statamic.cp.updater.product', $addon -> slug())); ?>"
                            class="text-blue font-bold mr-1"><?php echo e($addon -> name()); ?></a>
                    <td><?php echo e($addon -> version()); ?></td>
                    <?php if($count = $addon->changelog()->availableUpdatesCount()): ?>
                    <td class="text-right"><span
                            class="badge-sm bg-green btn-sm"><?php echo e(trans_choice('1 update|:count updates', $count)); ?></span></td>
                    <?php else: ?>
                    <td class="text-right"><?php echo e(__('Up to date')); ?></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>

        <h6 class="mt-4"><?php echo e(__('Unlisted Addons')); ?></h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <?php $__currentLoopData = $unlistedAddons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="w-64"><?php echo e($addon->name()); ?></td>
                        <td><?php echo e($addon->version()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>

        <?php echo $__env->make('statamic::partials.docs-callout', [
            'topic' => __('Updates'),
            'url' => 'updates'
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/updater/index.blade.php ENDPATH**/ ?>