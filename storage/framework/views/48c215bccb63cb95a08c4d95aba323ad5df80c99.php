<li class="<?php echo e($item->isActive() ? 'current' : ''); ?>">
    <a href="<?php echo e($item->url()); ?>">
        <i><?php echo $item->icon(); ?></i><span><?php echo e(__($item->name())); ?></span>
        <span class="badge-sm bg-red ml-1"><?php echo e(Statamic\Facades\Stache::duplicates()->count()); ?></span>
    </a>
</li>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/nav/duplicates.blade.php ENDPATH**/ ?>