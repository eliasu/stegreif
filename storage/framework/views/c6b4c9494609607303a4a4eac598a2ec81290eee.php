<?php $__env->startSection('title', __('Configure Form')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('forms.show', $form->handle()),
            'title' => $form->title()
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
    </header>

    <collection-edit-form
        initial-title="<?php echo e($form->title()); ?>"
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        url="<?php echo e(cp_route('forms.update', $form->handle())); ?>"
        listing-url="<?php echo e(cp_route('forms.index')); ?>"
    ></collection-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/forms/edit.blade.php ENDPATH**/ ?>