<?php $__env->startSection('title', Statamic::crumb(__('Email'), __('Utilities'))); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo e(__('Email')); ?></h1>
    </header>

    <div class="card">
        <form method="POST" action="<?php echo e(cp_route('utilities.email')); ?>">
            <?php echo csrf_field(); ?>

            <div class="flex items-center">
                <input class="input-text mr-2" type="text" name="email" value="<?php echo e(old('email', $user->email())); ?>" />
                <button type="submit" class="btn-primary"><?php echo e(__('Send Test Email')); ?></button>
            </div>
            <?php if($errors->has('email')): ?>
                <p class="mt-1"><small class="help-block text-red"><?php echo e($errors->first('email')); ?></small></p>
            <?php endif; ?>
        </form>
    </div>

    <h2 class="mt-5 mb-1 font-bold text-lg"><?php echo e(__('Configuration')); ?></h2>
    <p class="text-sm text-grey mb-2"><?php echo __('statamic::messages.email_utility_configuration_description', ['path' => config_path('mail.php')]); ?></p>
    <div class="card p-0">
        <table class="data-table">
            <?php if(config('mail.mailers')): ?>
                <?php echo $__env->make('statamic::utilities.partials.email-l7', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('statamic::utilities.partials.email-l6', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <tr>
                <th class="pl-2 py-1 w-1/4"><?php echo e(__('Default From Address')); ?></th>
                <td>
                    <?php if(config('mail.from.address')): ?>
                        <code><?php echo e(config('mail.from.address')); ?></code>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th class="pl-2 py-1 w-1/4"><?php echo e(__('Default From Name')); ?></th>
                <td>
                    <?php if(config('mail.from.name')): ?>
                        <code><?php echo e(config('mail.from.name')); ?></code>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th class="pl-2 py-1 w-1/4"><?php echo e(__('Markdown theme')); ?></th>
                <td>
                    <?php if(config('mail.markdown.theme')): ?>
                        <code><?php echo e(config('mail.markdown.theme')); ?></code>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th class="pl-2 py-1 w-1/4"><?php echo e(__('Markdown paths')); ?></th>
                <td>
                    <?php $__currentLoopData = config('mail.markdown.paths'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <code><?php echo e($path); ?></code><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/utilities/email.blade.php ENDPATH**/ ?>