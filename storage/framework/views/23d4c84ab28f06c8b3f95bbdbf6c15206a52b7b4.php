<div class="logo pt-7">
    <?php if($customLogo): ?>
        <img src="<?php echo e($customLogo); ?>" alt="<?php echo e(config('statamic.cp.custom_cms_name')); ?>" class="white-label-logo">
    <?php else: ?>
        <?php echo Statamic::svg('statamic-wordmark') ?>
    <?php endif; ?>
</div>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/partials/outside-logo.blade.php ENDPATH**/ ?>