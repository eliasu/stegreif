<?php $__env->startSection('title', __('Create Fieldset')); ?>

<?php $__env->startSection('content'); ?>
    <fieldset-create-form
        route="<?php echo e(cp_route('fieldsets.store')); ?>">
    </fieldset-create-form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/fieldsets/create.blade.php ENDPATH**/ ?>