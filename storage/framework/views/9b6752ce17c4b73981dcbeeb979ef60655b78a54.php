<?php $__env->startSection('title', __('Blueprints')); ?>

<?php $__env->startSection('content'); ?>

    <div class="flex justify-between items-center mb-3">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
        <div v-cloak>
        <dropdown-list class="inline-block">
            <template v-slot:trigger>
                <button class="button btn-primary flex items-center pr-2">
                    <?php echo e(__('Create Blueprint')); ?>

                    <svg-icon name="chevron-down-xs" class="w-2 ml-1" />
                </button>
            </template>

            <?php $__currentLoopData = Statamic\Facades\Collection::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?><h6 class="p-1"><?php echo e(__('Collections')); ?></h6><?php endif; ?>
                <dropdown-item redirect="<?php echo e(cp_route('collections.blueprints.create', $collection)); ?>"><?php echo e($collection->title()); ?></dropdown-item>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = Statamic\Facades\Taxonomy::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?><h6 class="p-1 mt-2"><?php echo e(__('Taxonomies')); ?></h6><?php endif; ?>
                <dropdown-item redirect="<?php echo e(cp_route('taxonomies.blueprints.create', $taxonomy)); ?>"><?php echo e($taxonomy->title()); ?></dropdown-item>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </dropdown-list>
        </div>
    </div>

    <?php $__currentLoopData = Statamic\Facades\Collection::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Collections')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <?php $__currentLoopData = $collection->entryBlueprints(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blueprint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('content-writing') ?></div>
                                <span class="little-dot <?php echo e($blueprint->hidden() ? 'hollow' : 'bg-green'); ?> mr-1" v-tooltip="'<?php echo e(__($blueprint->hidden() ? 'Hidden': 'Visible')); ?>'"></span>
                                <a href="<?php echo e(cp_route('collections.blueprints.edit', [$collection, $blueprint])); ?>"><?php echo e($blueprint->title()); ?></a>
                            </div>
                        </td>
                        <td class="text-right text-2xs"><?php echo e($collection->title()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->last): ?>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = Statamic\Facades\Taxonomy::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Taxonomies')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <?php $__currentLoopData = $taxonomy->termBlueprints(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blueprint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('tags') ?></div>
                                <span class="little-dot <?php echo e($blueprint->hidden() ? 'hollow' : 'bg-green'); ?> mr-1" v-tooltip="'<?php echo e(__($blueprint->hidden() ? 'Hidden': 'Visible')); ?>'"></span>
                                <a href="<?php echo e(cp_route('taxonomies.blueprints.edit', [$taxonomy, $blueprint])); ?>"><?php echo e($blueprint->title()); ?></a>
                            </div>
                        </td>
                        <td class="text-right text-2xs"><?php echo e($taxonomy->title()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->last): ?>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = Statamic\Facades\Nav::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Navigation')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <tr>
                    <td>
                        <div class="flex items-center">
                            <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('hierarchy-files') ?></div>
                            <a href="<?php echo e(cp_route('navigation.blueprint.edit', $nav->handle())); ?>"><?php echo e($nav->title()); ?></a>
                        </div>
                    </td>
                </tr>
        <?php if($loop->last): ?>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = Statamic\Facades\GlobalSet::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Globals')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <tr>
                    <td>
                        <div class="flex items-center">
                            <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('earth') ?></div>
                            <a href="<?php echo e(cp_route('globals.blueprint.edit', $set->handle())); ?>"><?php echo e($set->title()); ?></a>
                        </div>
                    </td>
                </tr>
        <?php if($loop->last): ?>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = Statamic\Facades\AssetContainer::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $container): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Asset Containers')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <tr>
                    <td>
                        <div class="flex items-center">
                            <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('assets') ?></div>
                            <a href="<?php echo e(cp_route('asset-containers.blueprint.edit', $container->handle())); ?>"><?php echo e($container->title()); ?></a>
                        </div>
                    </td>
                </tr>
        <?php if($loop->last): ?>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = Statamic\Facades\Form::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Forms')); ?></h3>
        <div class="card p-0 mb-2">
            <table class="data-table">
        <?php endif; ?>
                <tr>
                    <td>
                        <div class="flex items-center">
                            <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('drawer-file') ?></div>
                            <a href="<?php echo e(cp_route('forms.blueprint.edit', $form->handle())); ?>"><?php echo e($form->title()); ?></a>
                        </div>
                    </td>
        <?php if($loop->last): ?>
                </tr>
        </table>
        <?php endif; ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h3 class="little-heading pl-0 mb-1"><?php echo e(__('Other')); ?></h3>
    <div class="card p-0 mb-2">
        <table class="data-table">
            <tr>
                <td>
                    <div class="flex items-center">
                        <div class="w-4 h-4 mr-2"><?php echo Statamic::svg('users') ?></div>
                        <a href="<?php echo e(cp_route('users.blueprint.edit')); ?>"><?php echo e(__('User')); ?></a>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Blueprints'),
        'url' => Statamic::docsUrl('blueprints')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/blueprints/index.blade.php ENDPATH**/ ?>