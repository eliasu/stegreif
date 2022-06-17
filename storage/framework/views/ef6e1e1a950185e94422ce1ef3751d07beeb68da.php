<?php $__env->startSection('title', __('Edit Blueprint')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('forms.show', $form->handle()),
        'title' => $form->title(),
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <blueprint-builder
        action="<?php echo e(cp_route('forms.blueprint.update', $form->handle())); ?>"
        :initial-blueprint="<?php echo e(json_encode($blueprintVueObject)); ?>"
        :use-sections="false"
        :is-form-blueprint="true"
    ></blueprint-builder>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Blueprints'),
        'url' => Statamic::docsUrl('blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/forms/blueprints/edit.blade.php ENDPATH**/ ?>