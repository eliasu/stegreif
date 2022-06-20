<?php $__env->startSection('title', __('Edit Global Set')); ?>

<?php $__env->startSection('content'); ?>

    <global-publish-form
        publish-container="base"
        :initial-actions="<?php echo e(json_encode($actions)); ?>"
        method="patch"
        globals-url="<?php echo e(cp_route('globals.index')); ?>"
        initial-title="<?php echo e($variables->title()); ?>"
        initial-handle="<?php echo e($variables->handle()); ?>"
        initial-reference="<?php echo e($reference); ?>"
        initial-blueprint-handle="<?php echo e($variables->blueprint()->handle()); ?>"
        :initial-fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(empty($values) ? '{}' : json_encode($values)); ?>"
        :initial-localized-fields="<?php echo e(json_encode($localizedFields)); ?>"
        :initial-meta="<?php echo e(empty($meta) ? '{}' : json_encode($meta)); ?>"
        :initial-localizations="<?php echo e(json_encode($localizations)); ?>"
        :initial-has-origin="<?php echo e(Statamic\Support\Str::bool($hasOrigin)); ?>"
        :initial-is-root="<?php echo e(Statamic\Support\Str::bool($isRoot)); ?>"
        :initial-origin-values="<?php echo e(json_encode($originValues)); ?>"
        initial-site="<?php echo e($locale); ?>"
        :can-configure="<?php echo e(json_encode($canConfigure)); ?>"
        configure-url="<?php echo e($set->editUrl()); ?>"
        :can-edit="<?php echo e(json_encode($canEdit)); ?>"
        :can-edit-blueprint="<?php echo e($actions['editBlueprint'] ? Statamic\Support\Str::bool($user->can('configure fields')) : 'false'); ?>"
    ></global-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/globals/edit.blade.php ENDPATH**/ ?>