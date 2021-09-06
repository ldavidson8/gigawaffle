<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Fonts -->
    <style>
        @font-face { font-family: Rubik; src: url('{{ asset("fonts/Rubik-VariableFont_wght.ttf") }}'); }
        @font-face { font-family: Rubik; src: url('{{ asset("fonts/Rubik-Italic-VariableFont_wght.ttf") }}'); font-style: italic; }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Our Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/mail.css') }}" />
    @yield('stylesheets')

</head>
<body>
    <header><nav><a class="navbar-brand" href="{{ route('home') }}">gigawaffle</a></nav></header>

    @yield('main-content')

    <footer><nav>&nbsp;</nav></header>
</body>
</html>
