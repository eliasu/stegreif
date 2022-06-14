<div class="card p-0 overflow-hidden h-full">
    <div class="flex justify-between items-center pt-2 px-2">
        <h2>
            <div class="flex items-center">
                <div class="h-6 w-6 mr-1 text-grey-80">
                    <?php echo Statamic::svg('assets') ?>
                </div>
                <span><?php echo e(__('strings.widget_assets_title', ['container' => $container])); ?></span>
            </div>
        </h2>
    </div>
    <div class="content p-2">
        <p>
            <?php echo e(__('strings.widget_assets_explanation')); ?>

            <?php echo e(trans_choice('strings.widget_assets_count', $amount, ['amount' => $amount])); ?>

        </p>
    </div>

    <?php if($assets): ?>
        <table tabindex="0" class="data-table">
            <tbody tabindex="0">
    <?php endif; ?>
    <?php $__empty_1 = true; $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="sortable-row outline-none" tabindex="0">
            <td>
                <div class="flex items-center">
                    <div class="little-dot mr-1 bg-red"></div>
                    <a href="<?php echo e($asset['edit_url']); ?>" aria-label="<?php echo e(__('strings.widget_assets_edit')); ?>"><?php echo e($asset['basename']); ?></a>
                </div>
            </td>
            <td class="actions-column"></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="content p-2">
            <p><?php echo e(__('strings.widget_assets_done')); ?></p>
        </div>
    <?php endif; ?>
    <?php if($assets): ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php /**PATH /Users/elias/Sites/Github/stegreif/resources/views/widgets/images-missing-alt.blade.php ENDPATH**/ ?>