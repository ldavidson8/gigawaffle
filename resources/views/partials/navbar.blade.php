<?php
    if (!isset($navbar_page)) $navbar_page = "";
?>
<style>
    header
    {
        padding: 0px 20px;
    }

    #navbar-logo
    {
        font-size: 25px;
    }
</style>
<nav class="navbar navbar-dark navbar-expand-md">
    <a id="navbar-logo" class="navbar-brand" href="{{ route('home') }}">gigawaffle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto center-content">
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "home") ? 'nav-link-current-page' : '' }}" href="{{ route("home") }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "clients") ? 'nav-link-current-page' : '' }}" href="{{ route("clients") }}">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "services") ? 'nav-link-current-page' : '' }}" href="{{ route("services") }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "about") ? 'nav-link-current-page' : '' }}" href="{{ route("about") }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($navbar_page == "blog") ? 'nav-link-current-page' : '' }}" href="{{ route('blog') }}">Blog</a>
            </li>
        </ul>
        @auth
            <ul class="navbar-nav center-content" style="margin: 0px;">
                <li class="nav-item">
                    <a class="nav-link nav-link" href="{{ route('logout-confirm') }}">Logout</a>
                </li>
            </ul>
        @endauth
        <div class="text-center">
            <button id="theme-toggle" class="btn btn-link btn-lg ml-2" type="button">
                <span class="d-block-light d-none text-white"><span class="d-block d-md-none">Switch to Dark Mode</span> <img src="{{ asset('img/moon.svg')}}"></span>
                <span class="d-block-dark d-none text-white"><span class="d-block d-md-none">Switch to Light Mode</span> <img src="{{ asset('img/sun.svg')}}"></span>
            </button>
        </div>
    </div>
</nav>
