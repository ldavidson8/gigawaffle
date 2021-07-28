<?php
    if (!isset($navbar_page)) $navbar_page = "";
?>
<style>
    .footer-link
    {
        color: var(--font-color)
    }

    .footer-link:hover
    {
        color: var(--secondary-color);
        text-decoration: none;
    }
    
    .fa-home
    {
        font-size: 3em;
        color: var(--primary-color);
    }
    
    .bottom-border-center
    {
        background: linear-gradient(var(--primary-color),var(--primary-color)) bottom/ 95% 5px no-repeat, var(--heading-color);
    }

</style>
<a href="https://linktr.ee/gigawaffle" rel="external">
    <div class="col-12 container-fluid text-center footer-link" style="background-color: var(--primary-color)">
        Find us on social media @gigawaffleuk
    </div>  
</a>
<footer>
    <div class="row">
        <div class="col-12 col-md-3 d-flex flex-column center-content" style="text-align: left;">
            <div style="width: 100%;">
                <p style="font-size: 29px; font-weight: 600;">gigawaffle</p>
                <p style="font-size: 17px; margin: 0px;">&copy;2021 Gigawaffle</p>
            </div>
        </div>
        <div class="col-12 col-md-6 row">
            <div class="col-6 d-flex flex-column center-content" style="text-align: right;">
                <ul class="list-unstyled" style="width: 100%;">
                    <a class="footer-link" href="{{ route('about') }}"><li>About</li></a>
                    <a class="footer-link" href="{{ route('clients') }}#contact-us"><li>Contact Us</li></a>
                    <a class="footer-link" href="https://www.znergi.co.uk/jobs" rel="external"><li>Jobs</li></a>
                </ul>
            </div>
            <div class="col-6 d-flex flex-column center-content" style="text-align: left;">
                <ul class="list-unstyled" style="width: 100%;">
                    <a class="footer-link" href="{{ route('terms-and-conditions') }}"><li>Terms</li></a>
                    <a class="footer-link" href="{{ route('privacy-policy') }}"><li>Privacy</li></a>
                    <a class="footer-link" href="{{ route('cookie-policy') }}" rel="external"><li>Cookies</li></a>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column center-content" style="text-align: right;">
            <ul class="list-unstyled" style="font-size: 17px; width: 100%;">
                <li style="font-size; 20px; font-weight: 500; display: inline-block;">
                    <img src="{{ asset('img/home-icon.png') }}" style="height: 1em;" />
                    Preston HQ
                </li>
                <li>Estate House</li>
                <li>Fox Street</li>
                <li>Preston</li>
                <li>PR1 2AB</li>
            </ul>
        </div>
    </div>
</div>