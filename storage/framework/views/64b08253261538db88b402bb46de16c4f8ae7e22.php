<ul class="navbar-nav mr-auto">
    <?php if(auth()->guard()->check()): ?>
        <li class="nav-item">
            <a class="nav-link navigation-link" href="<?php echo e(route('logout')); ?>">Logout</a>
        </li>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item"><a class="navigation-link <?php echo e(($navbar_page == "login") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route('login')); ?>">Login/Register</a></li>
    <?php endif; ?>
</ul><?php /**PATH C:\Development\Gigawaffle\website-gigawaffle\resources\views/partials/navbar-account.blade.php ENDPATH**/ ?>