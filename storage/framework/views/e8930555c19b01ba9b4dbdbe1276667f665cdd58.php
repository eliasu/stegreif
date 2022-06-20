<?php $__env->startSection('title', __('Licensing')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('utilities.index'),
        'title' => __('Utilities')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($requestError): ?>

        <div class="no-results md:pt-8 max-w-2xl mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2">
                    <h1 class="mb-4"><?php echo e(__('Licensing')); ?></h1>
                    <p class="text-grey-70 leading-normal mb-4 text-lg antialiased">
                        <?php echo e(__('statamic::messages.outpost_issue_try_later')); ?>

                    </p>
                    <a href="<?php echo e(cp_route('utilities.licensing.refresh')); ?>" class="btn-primary btn-lg"><?php echo e(__('Try again')); ?></a>
                </div>
                <div class="hidden md:block w-1/2 pl-6">
                    <?php echo Statamic::svg('empty/navigation') ?>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div class="flex mb-3">
            <h1 class="flex-1"><?php echo e(__('Licensing')); ?></h1>
        </div>

        <?php if($configCached): ?>
            <div class="text-xs border border-yellow-dark rounded p-2 bg-yellow">
                <div class="font-bold mb-1"><?php echo e(__('Configuration is cached')); ?></div>
                <p><?php echo __('statamic::messages.licensing_config_cached_warning'); ?></p>
           </div>
        <?php endif; ?>

        <h6 class="mt-4">Site</h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <tr>
                    <td class="w-64 font-bold">
                        <span class="little-dot <?php echo e($site->valid() ? 'bg-green' : 'bg-red'); ?> mr-1"></span>
                        <?php echo e($site->key() ?? __('No license key')); ?>

                    </td>
                    <td class="relative">
                        <?php echo e($site->domain()['url'] ?? ''); ?>

                        <?php if($site->hasMultipleDomains()): ?>
                            <span class="text-2xs">(<?php echo e(trans_choice('and :count more', $site->additionalDomainCount())); ?>)</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-right text-red"><?php echo e($site->invalidReason()); ?></td>
                </tr>
            </table>
        </div>

        <h6 class="mt-4">Core</h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <tr>
                    <td class="w-64 font-bold">
                        <span class="little-dot <?php echo e($statamic->valid() ? 'bg-green' : 'bg-red'); ?> mr-1"></span>
                        Statamic <?php if($statamic->pro()): ?><span class="text-pink">Pro</span><?php else: ?> Free <?php endif; ?>
                    </td>
                    <td><?php echo e($statamic->version()); ?></td>
                    <td class="text-right text-red"><?php echo e($statamic->invalidReason()); ?></td>
                </tr>
            </table>
        </div>

        <h6 class="mt-4"><?php echo e(__('Addons')); ?></h6>
        <?php if($addons->isEmpty()): ?>
        <p class="text-sm text-grey mt-1"><?php echo e(__('No addons installed')); ?></p>
        <?php else: ?>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="w-64 mr-1">
                            <span class="little-dot <?php echo e($addon->valid() ? 'bg-green' : 'bg-red'); ?> mr-1"></span>
                            <span class="font-bold"><a href="<?php echo e($addon->addon()->marketplaceUrl()); ?>" class="text-grey hover:text-blue"><?php echo e($addon->name()); ?></a></span>
                            <?php if($addon->edition()): ?><span class="badge uppercase font-bold text-grey-60"><?php echo e($addon->edition() ?? ''); ?></span><?php endif; ?>
                        </td>
                        <td><?php echo e($addon->version()); ?></td>
                        <td class="text-right text-red"><?php echo e($addon->invalidReason()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php endif; ?>

        <?php if(!$unlistedAddons->isEmpty()): ?>
        <h6 class="mt-4"><?php echo e(__('Unlisted Addons')); ?></h6>
        <div class="card p-0 mt-1">
            <table class="data-table">
                <?php $__currentLoopData = $unlistedAddons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="w-64 font-bold mr-1">
                            <span class="little-dot bg-green mr-1"></span>
                            <?php echo e($addon->name()); ?>

                        </td>
                        <td><?php echo e($addon->version()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php endif; ?>

        <div class="mt-5 py-2 border-t flex items-center">
            <a href="<?php echo e($site->url()); ?>" target="_blank" class="btn btn-primary mr-2"><?php echo e(__('Edit Site')); ?></a>
            <?php if($addToCartUrl): ?> <a href="<?php echo e($addToCartUrl); ?>" target="_blank" class="btn mr-2"><?php echo e(__('Buy Licenses')); ?></a> <?php endif; ?>
            <a href="<?php echo e(cp_route('utilities.licensing.refresh')); ?>" class="btn"><?php echo e(__('Sync')); ?></a>
            <p class="ml-2 text-2xs text-grey"><?php echo e(__('statamic::messages.licensing_sync_instructions')); ?></p>
        </div>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Licensing'),
        'url' => Statamic::docsUrl('licensing')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/licensing.blade.php ENDPATH**/ ?>