<?php $__env->startSection('title', __('Edit Blueprint')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('assets.browse.show', $container->handle()),
        'title' => $container->title(),
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <blueprint-builder
        action="<?php echo e(cp_route('asset-containers.blueprint.update', $container->handle())); ?>"
        :initial-blueprint="<?php echo e(json_encode($blueprintVueObject)); ?>"
        :use-sections="false"
    ></blueprint-builder>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Blueprints'),
        'url' => Statamic::docsUrl('blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/assets/containers/blueprints/edit.blade.php ENDPATH**/ ?>