<?php
    if (!isset($navbar_page)) $navbar_page = "";
?>
<nav class="navbar navbar-expand-md navbar-light navbar-outer container-lg">
    <div class="container-fluid">
        <ul style="list-style-type: none; padding: 0px; margin: 0px;">
            <li class="nav-item">
                <a class="nav-link navigation-link <?php echo e(($navbar_page == "home") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("home")); ?>">Home</a>
            </li>
        </ul>
        <div class="d-none d-md-block">
            <ul style="list-style-type: none; padding: 0px; margin: 0px;">
                <li class="nav-item">
                    <a class="nav-link navigation-link <?php echo e(($navbar_page == "clients") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("clients")); ?>">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigation-link <?php echo e(($navbar_page == "services") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("services")); ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigation-link <?php echo e(($navbar_page == "about") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("about")); ?>">About</a>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="display: flex; align-items: center; font-size: 22px;">
                
                <div class="d-block d-md-none">
                    <ul style="list-style-type: none; padding: 0px; margin: 0px;">
                        <li class="nav-item">
                            <a class="nav-link navigation-link <?php echo e(($navbar_page == "clients") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("clients")); ?>">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation-link <?php echo e(($navbar_page == "services") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("services")); ?>">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation-link <?php echo e(($navbar_page == "about") ? 'navigation-link-current-page' : ''); ?>" href="<?php echo e(route("about")); ?>">Investments</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Development\Gigawaffle\website-gigawaffle\resources\views/partials/navbar.blade.php ENDPATH**/ ?>