<?php $__env->startSection('title', __('Addons')); ?>

<?php $__env->startSection('content'); ?>

    <addon-list :install-count="<?php echo e($addonCount); ?>"></addon-list>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/addons/index.blade.php ENDPATH**/ ?>