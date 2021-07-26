<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <title><?php echo e((isset($page_title)) ? "$page_title" : 'Gigawaffle'); ?></title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php if(isset($description)): ?>
        <meta name="description" content="<?php echo e($description); ?>" />
    <?php endif; ?>
    
    <link rel="shortcut icon" type="image/jpg" href="<?php echo e(asset('favicon.png')); ?>"/>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Our Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/site.css')); ?>" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <?php echo $__env->yieldContent('stylesheets'); ?>
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer="true"></script>

    <!-- Our Scripts -->
    <script type="text/javascript" src="<?php echo e(URL::asset('js/intersection-observer-api.js')); ?>"></script>

</head>
<body>
    <?php echo $__env->yieldContent('before-header'); ?>

    <header>
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <?php echo $__env->yieldContent('main-content'); ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('after-footer'); ?>
    
    <!-- Scripts -->
    <?php echo $__env->yieldContent('script'); ?>
    <script src="<?php echo e(asset('js/site.js')); ?>" defer="true"></script>

</body>
</html>
<?php /**PATH C:\Development\Gigawaffle\website-gigawaffle\resources\views/layouts/master.blade.php ENDPATH**/ ?>