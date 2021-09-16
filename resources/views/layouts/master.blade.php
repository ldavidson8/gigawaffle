<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>{{ (isset($page_title)) ? "$page_title" : 'Gigawaffle' }}</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @if (isset($description))
        <meta name="description" content="{{ $description }}" />
    @endif

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('favicon.png') }}"/>

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Fonts -->
    <style>
        @font-face { font-family: Rubik; src: url('{{ asset("fonts/Rubik-VariableFont_wght.ttf") }}'); }
        @font-face { font-family: Rubik; src: url('{{ asset("fonts/Rubik-Italic-VariableFont_wght.ttf") }}'); font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-Light.ttf") }}'); font-weight: 300;}
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-LightItalic.ttf") }}'); font-weight: 300; font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-Regular.ttf") }}'); }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-Italic.ttf") }}'); font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-Medium.ttf") }}'); font-weight: 500;}
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-MediumItalic.ttf") }}'); font-weight: 500; font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-SemiBold.ttf") }}'); font-weight: 600;}
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-SemiBoldItalic.ttf") }}'); font-weight: 600; font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-Bold.ttf") }}'); font-weight: 700; font-style: italic; }
        @font-face { font-family: Poppins; src: url('{{ asset("fonts/Poppins-BoldItalic.ttf") }}'); font-weight: 700; font-style: italic; }
    </style>


    <!-- Our Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}" />

    @yield('stylesheets')

    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="18350f06-db86-4fed-9f79-aa8cdb6eca23" data-blockingmode="auto" type="text/javascript"></script>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer="true"></script>
    <script src="https://kit.fontawesome.com/6e2d0444fe.js" crossorigin="anonymous"></script>

    <script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVLHDXKRLS"></script>
    <script src="{{ URL::asset('js/google-analytics.js') }}"></script>

    <!-- Facebook Pixel Code -->
    <script type="text/javascript" src="{{ URL::asset('js/facebook-pixel.js') }}"></script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=534470887542377&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Our Scripts -->
    <script type="text/javascript" src="{{ URL::asset('js/intersection-observer-api.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/lava-lamp.js') }}"></script>

</head>
<body class="background-color-white color-navyblue">
    @yield('before-header')

    <header>
        @include('partials.navbar')
    </header>

    @yield('main-content')

    @include('partials.footer')

    @yield('after-footer')
    <!-- Scripts -->
    @yield('script')
    <script src="{{ asset('js/site.js') }}" defer="true"></script>
    <script type="text/javascript" src="{{ URL::asset('js/darkmode.js') }}"></script>
</body>
</html>
