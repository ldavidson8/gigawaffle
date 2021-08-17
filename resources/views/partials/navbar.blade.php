<?php
    if (!isset($navbar_page)) $navbar_page = "";
?>
<style>
    header
    {
        padding: 0px 30px;
    }

    #navbar-logo
    {
        padding: 19px 0px;
    }

    .switch
    {
        position : relative ;
        display : inline-block;
        width : 50px;
        height : 30px;
        background-color: var(--color-white);
        border-radius: 20px;
    }

    .switch::after
    {
        content: '';
        position: absolute;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background-color: var(--color-violet);
        top: 1px;
        left: 1px;
        transition: all 0.3s;
    }
    .checkbox:checked + .switch::after
    {
        left : 20px;
    }
    .checkbox:checked + .switch
    {
        background-color: var(--color-navyblue);
    }
    .checkbox
    {
        display : none;
    }
</style>
<nav class="navbar navbar-dark navbar-expand-sm">
    <a id="navbar-logo" class="navbar-brand" href="{{ route('home') }}">gigawaffle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto center-content">
            <li class="nav-item active">
                <a class="nav-link {{ ($navbar_page == "home") ? 'navigation-link-current-page' : '' }}" href="{{ route("home") }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "clients") ? 'navigation-link-current-page' : '' }}" href="{{ route("clients") }}">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "services") ? 'navigation-link-current-page' : '' }}" href="{{ route("services") }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "about") ? 'navigation-link-current-page' : '' }}" href="{{ route("about") }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://gigawaffle.co.uk/blog/">Blog</a>
            </li>
        </ul>
        @auth
            <ul class="navbar-nav center-content" style="margin: 0px;">
                <li class="nav-item">
                    <a class="nav-link navigation-link" href="{{ route('logout-confirm') }}">Logout</a>
                </li>
            </ul>
        @endauth
    </div>
</nav>
