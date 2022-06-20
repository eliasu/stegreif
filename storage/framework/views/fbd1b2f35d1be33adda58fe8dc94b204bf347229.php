<?php $__env->startSection('title', __('Create Blueprint')); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e($action); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="max-w-lg mt-2 mx-auto">
        <div class="rounded p-3 lg:px-7 lg:py-5 shadow bg-white">
            <header class="text-center mb-6">
                <h1 class="mb-3"><?php echo e(__('Create Blueprint')); ?></h1>
                <p class="text-grey"><?php echo e(__('statamic::messages.blueprints_intro')); ?></p>
            </header>
            <div class="mb-5">
                <label class="font-bold text-base mb-sm" for="name"><?php echo e(__('Title')); ?></label>
                <input type="text" name="title" value="<?php echo e(old('title')); ?>" class="input-text" autofocus required tabindex="1">
                <div class="text-2xs text-grey-60 mt-1 flex items-center">
                    <?php echo e(__('statamic::messages.blueprints_title_instructions')); ?>

                </div>
                <?php if($errors->has('title')): ?>
                    <div class="text-red text-xs mt-1"><?php echo e($errors->first('title')); ?></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <button tabindex="4" class="btn-primary mx-auto btn-lg">
                <?php echo e(__('Create Blueprint')); ?>

            </button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/collections/blueprints/create.blade.php ENDPATH**/ ?>