<div class="card p-0 overflow-hidden h-full">
    <div class="flex justify-between items-center p-2">
        <h2>
            <a class="flex items-center" href="<?php echo e($collection->showUrl()); ?>">
                <div class="h-6 w-6 mr-1 text-grey-80">
                    <?php echo Statamic::svg('content-writing') ?>
                </div>
                <span><?php echo e($title); ?></span>
            </a>
        </h2>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', ['Statamic\Contracts\Entries\Entry', $collection])): ?>
        <a href="<?php echo e($collection->createEntryUrl()); ?>" class="text-blue hover:text-blue-dark text-sm"><?php echo e($button); ?></a>
        <?php endif; ?>
    </div>
    <collection-widget
        collection="<?php echo e($collection->handle()); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        initial-sort-column="<?php echo e($sortColumn); ?>"
        initial-sort-direction="<?php echo e($sortDirection); ?>"
        :initial-per-page="<?php echo e($limit); ?>"
    ></collection-widget>
</div>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/widgets/collection.blade.php ENDPATH**/ ?>