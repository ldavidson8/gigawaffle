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
<div class="text-white">
<a href="https://linktr.ee/gigawaffle" rel="external">
    <div class="col-12 container-fluid text-center footer-link" style="background-color: var(--primary-color)">
        Find us on social media @gigawaffleuk
    </div>  
</a>
<div class="container-fluid p-3" style="background-color: var(--heading-color)">
    <div class="row bottom-border-center ">
        <div class="col-5 col-md-6">
            <p style="font-size: 1.5em; font-weight: 600;"> gigawaffle <p>
            <ul class="list-unstyled">
                <a class="footer-link {{ ($navbar_page == "about") ? 'footer-link-current-page' : '' }}" href="{{ route("about") }}">
                    <li>About</li>
                </a>
                <a class="footer-link" href="">
                    <li>Contact Us</li>
                </a>
                <a class="footer-link" href="">
                    <li>Jobs</li>
                </a>
            </ul>
        </div>
        {{-- <div class="col-6 d-none d-md-block"></div> --}}
        <div class="col-7 col-md-6 d-flex flex-column text-right">
            <ul class="list-unstyled">
                <li> <i class="fa fa-home" style="display: inline-block" aria-hidden="true"></i>
                    <p style="font-size: 1.3em; font-weight: 500; display: inline-block"> Preston HQ </p>
                </li>
                <li>Estate House,</li>
                <li>Fox Street,</li>
                <li>Preston</li>
                <li>PR1 2AB</li>
            </ul>
        </div>
    </div>
    <div class="row no-margin pt-3">
        <div class="order-last order-md-0 d-block col-12 col-md-6 text-center text-md-left">
            <p> &copy;2021 Gigawaffle </p>
        </div>
        <div class="col-12 col-md-6 order-first order-md-1 text-md-right d-flex justify-content-between justify-content-md-end">
            <a class="footer-link mr-5"href="#"> Terms </a>
            <a class="footer-link" href="#"> Privacy </a>
        </div>
    </div>
</div>
</div>