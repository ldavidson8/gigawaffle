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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />


    <!-- Our Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    @yield('stylesheets')
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer="true"></script>

    <!-- Our Scripts -->
    <script type="text/javascript" src="{{ URL::asset('js/intersection-observer-api.js') }}"></script>

</head>
<body>
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

</body>
</html>
