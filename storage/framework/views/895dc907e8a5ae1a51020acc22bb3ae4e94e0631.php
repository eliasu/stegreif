<?php $__env->startSection('title', __('Edit Blueprint')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('taxonomies.blueprints.index', $taxonomy),
        'title' => __('Blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <blueprint-builder
        show-title
        action="<?php echo e(cp_route('taxonomies.blueprints.update', [$taxonomy, $blueprint])); ?>"
        :initial-blueprint="<?php echo e(json_encode($blueprintVueObject)); ?>"
    ></blueprint-builder>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Blueprints'),
        'url' => Statamic::docsUrl('blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/blueprints/edit.blade.php ENDPATH**/ ?>