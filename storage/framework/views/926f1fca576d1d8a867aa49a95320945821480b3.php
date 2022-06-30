<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="noindex,nofollow">

<title><?php echo $__env->yieldContent('title', $title ?? __('Here')); ?> ‹ <?php echo e(Statamic::pro() ? config('statamic.cp.custom_cms_name', 'Statamic') : 'Statamic'); ?></title>

<?php if(Statamic::pro() && config('statamic.cp.custom_favicon_url')): ?>
    <?php echo $__env->make('statamic::partials.favicon', ['favicon_url' => config('statamic.cp.custom_favicon_url')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <link rel="icon" type="image/png" href="<?php echo e(Statamic::cpAssetUrl('img/favicon-32x32.png')); ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo e(Statamic::cpAssetUrl('img/favicon-16x16.png')); ?>" sizes="16x16" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(Statamic::cpAssetUrl('img/favicon.ico')); ?>" sizes="16x16 32x32"/>
<?php endif; ?>

<link href="<?php echo e(Statamic::cpAssetUrl('css/cp.css')); ?>?v=<?php echo e(Statamic::version()); ?>" rel="stylesheet" />

<?php if(Statamic::pro() && config('statamic.cp.custom_css_url')): ?>
<link href="<?php echo e(config('statamic.cp.custom_css_url')); ?>?v=<?php echo e(Statamic::version()); ?>" rel="stylesheet" />
<?php endif; ?>

<?php $__currentLoopData = Statamic::availableExternalStyles(request()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link href="<?php echo e($url); ?>" rel="stylesheet" />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = Statamic::availableStyles(request()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package => $paths): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $paths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link href="<?php echo e(Statamic::vendorAssetUrl("$package/css/$path")); ?>" rel="stylesheet" />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->yieldPushContent('head'); ?>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/partials/head.blade.php ENDPATH**/ ?>