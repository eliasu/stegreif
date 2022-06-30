<?php $__env->startSection('title', __('Edit Fieldset')); ?>

<?php $__env->startSection('content'); ?>

    <fieldset-edit-form
        action="<?php echo e(cp_route('fieldsets.update', $fieldset->handle())); ?>"
        breadcrumb-url="<?php echo e(cp_route('fieldsets.index')); ?>"
        :initial-fieldset="<?php echo e(json_encode($fieldsetVueObject)); ?>"
    ></fieldset-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/fieldsets/edit.blade.php ENDPATH**/ ?>