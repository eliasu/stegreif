<?php $__env->startSection('title', __('Blueprints')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('taxonomies.show', $taxonomy->handle()),
        'title' => $taxonomy->title()
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <taxonomy-blueprint-listing
        inline-template
        :initial-rows="<?php echo e(json_encode($blueprints)); ?>"
        reorder-url="<?php echo e(cp_route('taxonomies.blueprints.reorder', $taxonomy)); ?>"
    >
        <div>
            <div class="flex justify-between items-center mb-3">
                <h1><?php echo $__env->yieldContent('title'); ?></h1>

                <div>
                    <?php if($blueprints->count() > 1): ?>
                        <button
                            class="btn"
                            :class="{ 'disabled': !hasBeenReordered }"
                            :disabled="!hasBeenReordered"
                            @click="saveOrder"
                        ><?php echo e(__('Save Order')); ?></button>
                    <?php endif; ?>

                    <a href="<?php echo e(cp_route('taxonomies.blueprints.create', $taxonomy)); ?>" class="btn-primary ml-1"><?php echo e(__('Create Blueprint')); ?></a>
                </div>
            </div>

            <blueprint-listing
                :initial-rows="rows"
                :reorderable="<?php echo e($blueprints->count() > 1 ? 'true' : 'false'); ?>"
                @reordered="reordered"
            ></blueprint-listing>
        </div>
    </taxonomy-blueprint-listing>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Blueprints'),
        'url' => Statamic::docsUrl('blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/blueprints/index.blade.php ENDPATH**/ ?>