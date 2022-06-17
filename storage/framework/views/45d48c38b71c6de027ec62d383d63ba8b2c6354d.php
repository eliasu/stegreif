<?php $__env->startSection('title', Statamic::crumb('Submission ' . $submission->id(), $submission->form->title(), 'Forms')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('forms.show', $submission->form->handle()),
        'title' => $submission->form->title()
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <publish-form
        title="<?php echo e($title); ?>"
        :blueprint='<?php echo json_encode($blueprint, 15, 512) ?>'
        :meta='<?php echo json_encode($meta, 15, 512) ?>'
        :values='<?php echo json_encode($values, 15, 512) ?>'
        read-only
    ></publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/forms/submission.blade.php ENDPATH**/ ?>