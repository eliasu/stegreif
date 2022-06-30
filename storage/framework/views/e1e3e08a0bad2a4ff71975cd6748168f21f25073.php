<?php $__env->startSection('title', __('Users')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <header class="flex items-center mb-3">
        <h1 class="flex-1">
            <?php echo e(__('Users')); ?>

        </h1>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
            <dropdown-list class="mr-1">
                <dropdown-item :text="__('Edit Blueprint')" redirect="<?php echo e(cp_route('users.blueprint.edit')); ?>"></dropdown-item>
            </dropdown-list>
        <?php endif; ?>

        <?php if(Statamic::pro() && $user->can('create', 'Statamic\Contracts\Auth\User')): ?>
            <a href="<?php echo e(cp_route('users.create')); ?>" class="btn-primary ml-2"><?php echo e(__('Create User')); ?></a>
        <?php endif; ?>
    </header>

    <user-listing
        listing-key="users"
        initial-sort-column="email"
        initial-sort-direction="asc"
        :filters="<?php echo e($filters->toJson()); ?>"
        action-url="<?php echo e(cp_route('users.actions.run')); ?>"
    ></user-listing>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Users'),
        'url' => Statamic::docsUrl('users')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/users/index.blade.php ENDPATH**/ ?>