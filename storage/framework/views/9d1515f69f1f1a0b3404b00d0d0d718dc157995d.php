<?php
    $page_title = 'Not Found';
?>


<?php $__env->startSection('stylesheets'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/errors.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('before-header'); ?>
    <div class="full-size container-fluid d-flex h-100 flex-column" style="background-image: linear-gradient(#f0f0f0 10%, #00C2CB, #00C2CB);">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <hr/>
    <div class="row flex-grow-1 no-padding">
        <div class="col-xl-1 col-lg-1 col-md-2 d-none d-md-block"></div>
        <div class="col-xl-5 col-lg-6 col-md-8 col-12 left-column-content" style="background-image: linear-gradient(#4f4f4f, #1a1816, #1a1816, #1a1816, #4f4f4f, #5c5c5c); background-position: left; background; #454545;">
        <h1 style="font-weight: bold; font-size: 40px; color: #f0f0f0; text-align: center; letter-spacing: -3px;"><span style="letter-spacing: 3px;font-size: 100px; color: #00C2CB;">404</span><br /> Uh-oh! Looks Like The Lights Went Out</h1>
            <br /><br /><br />
            <p style="color: #f0f0f0; font-size: 18px; text-align: center; letter-spacing: 1px;">~There's nothing to see here~<br />This page does not or no longer exists<p> 
            <br />
            <br />
            <div style="display: flex; justify-content: center; align-items: center;">
                <p><a href="<?php echo e(url() -> previous()); ?>" onclick="history.back()"><button class="big-blue-button" style="width: 300px; font-size: 23px;">Turn on the lights</button></a></p>
            </div>
            <br />
            <br />
        </div>
        <div class="col-xl-6 col-lg-5 col-md-2 background-image-display-none" style="background-image: url('<?php echo e(asset('img/error pages/404.png')); ?>'); background-repeat: no-repeat; background-position: center; background-size: contain; background-origin: content-box; padding: 50px; opacity: 0.8;"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-footer'); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Development\Gigawaffle\website-gigawaffle\resources\views/errors/404.blade.php ENDPATH**/ ?>