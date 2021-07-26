<?php
    if (!isset($navbar_page)) $navbar_page = "";
?>
<nav class="navbar navbar-dark navbar-expand-lg">
    <a class="navbar-brand" href="#">gigawaffle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
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
    </div>
  </nav>

    {{-- <div class="container-fluid">
        
        <ul style="list-style-type: none; padding: 0px; margin: 0px;">
            <li class="nav-item">
                <a class="nav-link navigation-link {{ ($navbar_page == "home") ? 'navigation-link-current-page' : '' }}" href="{{ route("home") }}">Home</a>
            </li>
        </ul>
        <div class="d-none d-md-block">
            <ul style="list-style-type: none; padding: 0px; margin: 0px;">
                <li class="nav-item">
                    <a class="nav-link navigation-link {{ ($navbar_page == "clients") ? 'navigation-link-current-page' : '' }}" href="{{ route("clients") }}">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigation-link {{ ($navbar_page == "services") ? 'navigation-link-current-page' : '' }}" href="{{ route("services") }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navigation-link {{ ($navbar_page == "about") ? 'navigation-link-current-page' : '' }}" href="{{ route("about") }}">About</a>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="display: flex; align-items: center; font-size: 22px;">
                Dropdown Example
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
                <div class="d-block d-md-none">
                    <ul style="list-style-type: none; padding: 0px; margin: 0px;">
                        <li class="nav-item">
                            <a class="nav-link navigation-link {{ ($navbar_page == "clients") ? 'navigation-link-current-page' : '' }}" href="{{ route("clients") }}">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation-link {{ ($navbar_page == "services") ? 'navigation-link-current-page' : '' }}" href="{{ route("services") }}">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation-link {{ ($navbar_page == "about") ? 'navigation-link-current-page' : '' }}" href="{{ route("about") }}">Investments</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div> --}}