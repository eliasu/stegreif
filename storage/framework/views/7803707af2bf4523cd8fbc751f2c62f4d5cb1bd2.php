<?php $__env->startSection('title', __('Forms')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($forms->isEmpty())): ?>

        <div class="flex items-center mb-3">
            <h1 class="flex-1"><?php echo e(__('Forms')); ?></h1>

            <?php if(Statamic::pro() && $user->can('create', 'Statamic\Contracts\Forms\Form')): ?>
                <a href="<?php echo e(cp_route('forms.create')); ?>" class="btn-primary"><?php echo e(__('Create Form')); ?></a>
            <?php endif; ?>
        </div>

        <form-listing
            :initial-columns="<?php echo e(json_encode($initialColumns)); ?>"
            action-url="<?php echo e($actionUrl); ?>"
        ></form-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Forms'),
            'description' => __('statamic::messages.form_configure_intro'),
            'svg' => 'empty/form',
            'button_text' => __('Create Form'),
            'button_url' => cp_route('forms.create'),
            'can' => $user->can('create', 'Statamic\Contracts\Forms\Form')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Forms'),
        'url' => Statamic::docsUrl('forms')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/forms/index.blade.php ENDPATH**/ ?>