<style>
    .footer-link
    {
        color: var(--color-white)
    }

    .footer-link:hover
    {
        color: var(--color-violet);
        text-decoration: none;
    }

    .fa-home
    {
        font-size: 3em;
        color: var(--color-pink);
    }

    .bottom-border-center
    {
        background: linear-gradient(var(--color-pink),var(--color-pink)) bottom/ 95% 5px no-repeat, var(--color-navyblue);
    }
    @media (max-width: 360px)
        {
            .footer-ver
            {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
</style>
<footer class="text-white" style="width: 100%;">
    <a href="https://linktr.ee/gigawaffle" rel="external">
        <div class="col-12 container-fluid text-center footer-link py-2" style="background-color: var(--color-pink);">
            Find us on social media @gigawaffleuk
        </div>
    </a>
    <div class="container-fluid p-3" style="background-color: var(--color-navyblue)">
        <div class="row bottom-border-center px-md-5 px-0">
            <div class="col-5 col-md-6 no-padding">
                <p style="font-size: 1.3em; font-weight: 600;"> gigawaffle <p>
                <ul class="list-unstyled">
                    <a class="footer-link" href="{{ route('about') }}">
                        <li>About</li>
                    </a>
                    <a class="footer-link" href="{{ route('about') }}#contactform">
                        <li>Contact Us</li>
                    </a>
                    <a class="footer-link" href="https://www.znergi.co.uk/jobs" rel="external">
                        <li>Jobs</li>
                    </a>
                    <a class="footer-link" href="http://gigawaffle.co.uk/blog/">
                        <li>Blog</li>
                    </a>
                </ul>
            </div>
            <div class="col-7 col-md-6 no-padding d-flex flex-column text-right">
                <ul class="list-unstyled">
                    <li> <img src="{{ asset('img/home-icon.png') }}" height="30">
                        <p style="font-size: 1.3em; font-weight: 500; display: inline-block"> Preston HQ </p>
                    </li>
                    <li>Estate House</li>
                    <li>Fox Street</li>
                    <li>Preston</li>
                    <li>PR1 2AB</li>
                </ul>
            </div>
        </div>
        <div class="row no-margin pt-3 px-md-3 px-0">
            <div class="order-last order-md-0 d-block col-12 col-md-6 text-center text-md-left">
                <p> &copy;2021 Gigawaffle </p>
            </div>
            <div class="footer-ver col-12 col-md-6 order-first order-md-1 text-md-right d-flex justify-content-between justify-content-md-end">
                <a class="footer-link mr-3" href="{{ route('terms-and-conditions') }}"> Terms </a>
                <a class="footer-link mr-3" href="{{ route('privacy-policy') }}"> Privacy </a>
                <a class="footer-link mr-3" href="{{ route('cookie-policy') }}">Cookies</a>
                <a class="footer-link mr-3" href="{{ route('sitemap') }}">Sitemap</a>
            </div>
        </div>
    </div>
</div>

