<?php $__env->startSection('title', Statamic::crumb($form->title(), 'Forms')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('forms.index'),
            'title' => __('Forms')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex items-center">
            <h1 class="flex-1">
                <?php echo e($form->title()); ?>

            </h1>

            <dropdown-list class="mr-1">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $form)): ?>
                    <dropdown-item :text="__('Edit Form')" redirect="<?php echo e($form->editUrl()); ?>"></dropdown-item>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $form)): ?>
                    <dropdown-item :text="__('Delete Form')" class="warning" @click="$refs.deleter.confirm()">
                        <resource-deleter
                            ref="deleter"
                            resource-title="<?php echo e($form->title()); ?>"
                            route="<?php echo e($form->deleteUrl()); ?>"
                            redirect="<?php echo e(cp_route('forms.index')); ?>"
                        ></resource-deleter>
                    </dropdown-item>
                <?php endif; ?>
            </dropdown-list>

            <dropdown-list>
                <button class="btn" slot="trigger"><?php echo e(__('Export Submissions')); ?></button>
                <dropdown-item :text="__('Export as CSV')" redirect="<?php echo e(cp_route('forms.export', ['type' => 'csv', 'form' => $form->handle()])); ?>?download=true"></dropdown-item>
                <dropdown-item :text="__('Export as JSON')" redirect="<?php echo e(cp_route('forms.export', ['type' => 'json', 'form' => $form->handle()])); ?>?download=true"></dropdown-item>
            </dropdown-list>
        </div>
    </header>

    <?php if(! empty($form->metrics())): ?>
    <div class="metrics mb-3">
        <?php $__currentLoopData = $form->metrics(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metric): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card px-3">
                <h3 class="mb-2 font-bold text-grey"><?php echo e($metric->label()); ?></h3>
                <div class="text-4xl"><?php echo e($metric->result()); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <form-submission-listing
        form="<?php echo e($form->handle()); ?>"
        action-url="<?php echo e(cp_route('forms.submissions.actions.run', $form->handle())); ?>"
        initial-sort-column="datestamp"
        initial-sort-direction="desc"
        :initial-columns="<?php echo e($columns->toJson()); ?>"
        v-cloak
    >
        <div slot="no-results" class="text-center border-2 border-dashed rounded-lg">
            <div class="max-w-md mx-auto px-4 py-8">
                <?php echo Statamic::svg('empty/form') ?>
                <h1 class="my-3"><?php echo e(__('No submissions')); ?></h1>
            </div>
        </div>
    </form-submission-listing>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/forms/show.blade.php ENDPATH**/ ?>