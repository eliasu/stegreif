<div class="global-header">
    <div class="lg:min-w-xl pl-1 md:pl-3 h-full flex items-center">
        <button class="nav-toggle hidden md:block ml-sm flex-shrink-0" @click="toggleNav" aria-label="<?php echo e(__('Toggle Nav')); ?>"><?php echo Statamic::svg('burger') ?></button>
        <button class="nav-toggle md:hidden ml-sm flex-shrink-0" @click="toggleMobileNav" v-if="! mobileNavOpen" aria-label="<?php echo e(__('Toggle Mobile Nav')); ?>"><?php echo Statamic::svg('burger') ?></button>
        <button class="nav-toggle md:hidden ml-sm flex-shrink-0" @click="toggleMobileNav" v-else v-cloak aria-label="<?php echo e(__('Toggle Mobile Nav')); ?>"><?php echo Statamic::svg('close') ?></button>
        <a href="<?php echo e(route('statamic.cp.index')); ?>" class="flex items-end">
            <div v-tooltip="version" class="hidden md:block flex-shrink-0">
                <?php if($customLogo): ?>
                    <img src="<?php echo e($customLogo); ?>" alt="<?php echo e(config('statamic.cp.custom_cms_name')); ?>" class="white-label-logo">
                <?php else: ?>
                    <?php echo Statamic::svg('statamic-wordmark', 'w-24') ?>
                    <?php if(Statamic::pro()): ?><span class="font-bold text-4xs align-top">PRO</span><?php endif; ?>

                <?php endif; ?>
            </div>
        </a>
    </div>

    <div class="sm:px-4 w-full flex-1 lg:flex items-center lg:justify-center mx-auto max-w-full">
        <global-search endpoint="<?php echo e(cp_route('search')); ?>" placeholder="<?php echo e(__('Search...')); ?>">
        </global-search>
    </div>

    <div class="head-link h-full md:pr-3 flex items-center justify-end">

        <?php if(Statamic\Facades\Site::hasMultiple()): ?>
            <global-site-selector>
                <template slot="icon"><?php echo Statamic::svg('sites') ?></template>
            </global-site-selector>
        <?php endif; ?>

        <favorite-creator class="hidden md:block"></favorite-creator>

        <?php if(Route::has('horizon.index') && \Laravel\Horizon\Horizon::check(request())): ?>
            <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="<?php echo e(route('horizon.index')); ?>" target="_blank" v-tooltip="'Laravel Horizon'">
                <?php echo Statamic::svg('horizon') ?>
            </a>
        <?php endif; ?>

        <?php if(config('nova.path') && (app()->environment('local') || $user->can('viewNova'))): ?>
            <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="/<?php echo e(trim(config('nova.path'), '/')); ?>/dashboards/main" target="_blank" v-tooltip="'Laravel Nova'">
                <?php echo Statamic::svg('nova') ?>
            </a>
        <?php endif; ?>

        <?php if(Route::has('telescope') && \Laravel\Telescope\Telescope::check(request())): ?>
            <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="<?php echo e(route('telescope')); ?>" target="_blank" v-tooltip="'Laravel Telescope'">
                <?php echo Statamic::svg('telescope') ?>
            </a>
        <?php endif; ?>

        <dropdown-list v-cloak>
            <template v-slot:trigger>
                <button class="hidden md:block h-6 w-6 ml-2 p-sm text-grey hover:text-grey-80" v-tooltip="__('Useful Links')" aria-label="<?php echo e(__('View Useful Links')); ?>">
                    <?php echo Statamic::svg('book-open') ?>
                </button>
            </template>

            <?php if(config('statamic.cp.link_to_docs')): ?>
            <dropdown-item external-link="https://statamic.dev" class="flex items-center">
                <span><?php echo e(__('Documentation')); ?></span>
                <i class="w-3 block ml-1"><?php echo Statamic::svg('external-link') ?></i>
            </dropdown-item>
            <?php endif; ?>

            <?php if(config('statamic.cp.support_url')): ?>
            <dropdown-item external-link="<?php echo e(config('statamic.cp.support_url')); ?>" class="flex items-center">
                <span><?php echo e(__('Support')); ?></span>
                <i class="w-3 block ml-1"><?php echo Statamic::svg('external-link') ?></i>
            </dropdown-item>
            <?php endif; ?>

            <dropdown-item @click="$events.$emit('keyboard-shortcuts.open')" class="flex items-center">
                <span><?php echo e(__('Keyboard Shortcuts')); ?></span>
            </dropdown-item>
        </dropdown-list>

        <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="<?php echo e(Statamic\Facades\Site::selected()->url()); ?>" target="_blank" v-tooltip="'<?php echo e(__('View Site')); ?>'" aria-label="<?php echo e(__('View Site')); ?>">
            <?php echo Statamic::svg('browser-com') ?>
        </a>
        <dropdown-list v-cloak>
            <template v-slot:trigger>
                <a class="dropdown-toggle items-center ml-2 h-full hide flex">
                    <?php if($user->avatar()): ?>
                        <div class="icon-header-avatar"><img src="<?php echo e($user->avatar()); ?>" /></div>
                    <?php else: ?>
                        <div class="icon-header-avatar icon-user-initials"><?php echo e($user->initials()); ?></div>
                    <?php endif; ?>
                </a>
            </template>

            <div class="px-1">
                <div class="text-base mb-px"><?php echo e($user->email()); ?></div>
                <?php if($user->isSuper()): ?>
                    <div class="text-2xs mt-px text-grey-60"><?php echo e(__('Super Admin')); ?></div>
                <?php endif; ?>
            </div>
            <div class="divider"></div>

            <dropdown-item :text="__('Profile')" redirect="<?php echo e(route('statamic.cp.account')); ?>"></dropdown-item>
            <dropdown-item :text="__('Log out')" redirect="<?php echo e(route('statamic.cp.logout')); ?>"></dropdown-item>
        </dropdown-list>
    </div>
</div>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/partials/global-header.blade.php ENDPATH**/ ?>