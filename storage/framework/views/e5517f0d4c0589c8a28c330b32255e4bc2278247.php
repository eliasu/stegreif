<?php $str = app('Statamic\Support\Str'); ?>

<?php $__env->startSection('title', Statamic::crumb($nav->title(), 'Navigation')); ?>

<?php $__env->startSection('content'); ?>

    <navigation-view
        title="<?php echo e($nav->title()); ?>"
        handle="<?php echo e($nav->handle()); ?>"
        breadcrumb-url="<?php echo e(cp_route('navigation.index')); ?>"
        pages-url="<?php echo e(cp_route('navigation.tree.index', $nav->handle())); ?>"
        submit-url="<?php echo e(cp_route('navigation.tree.update', $nav->handle())); ?>"
        edit-url="<?php echo e($nav->editUrl()); ?>"
        site="<?php echo e($site); ?>"
        :sites="<?php echo e(json_encode($sites)); ?>"
        :collections="<?php echo e(json_encode($collections)); ?>"
        :max-depth="<?php echo e($nav->maxDepth() ?? 'Infinity'); ?>"
        :expects-root="<?php echo e($str::bool($expectsRoot)); ?>"
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
    >
        <template #twirldown>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $nav)): ?>
                <dropdown-item :text="__('Edit Navigation')" redirect="<?php echo e($nav->editUrl()); ?>"></dropdown-item>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
                <dropdown-item :text="__('Edit Blueprint')" redirect="<?php echo e(cp_route('navigation.blueprint.edit', $nav->handle())); ?>"></dropdown-item>
            <?php endif; ?>
        </template>
    </navigation-view>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/navigation/show.blade.php ENDPATH**/ ?>