@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/blog-listing.css') }}" />

    <style>

        .main-heading
        {
            font-size: 32px;
        }
        header
        {
            background-image: none !important;
            background-color: transparent;
        }
        .caret-right-list
        {
            list-style-type: none;
        }

        ul.caret-right-list li:before
        {
            font-family: 'FontAwesome';
            content: '\f0da';
            margin:0 10px 0 -15px;
            color: var(--color-pink);
            font-size: 3em;
            vertical-align: middle;
        }

        .blog-cards
        {
            margin-bottom: 1em;
            text-align: center;
            border: 2px solid var(--color-navyblue);
        }

        .blog-card-link
        {
            position: relative;
        }

        .blog-cards-text
        {
            color: var(--color-pink);
            font-size: 17px;
            font-weight: 700;
        }

        .post-content
        {
            position: absolute;
            bottom: 25px;
            left: 15px;
        }

        .meta
        {
            color: var(--color-pink);
            font-size: 12px;
            margin-top: 5px;
        }
        .text-white-outline
        {
            /* 1 pixel white shadow to left, top, right and bottom */
            text-shadow:
            -1px 0 white,
            0 1px white,
            1px 0 white,
            0 -1px white;
        }

        .pink-button
        {
            background-color: #DF4985;
            color: white;
            font-weight: 700;
            font-size: 24px;
            border: none;
            border-radius: 20px;
            padding: 15px 25px;
        }

        .container-mask
        {
            background-color: var(--color-mask-container);
            color: white;
            position: relative;
            z-index: 1;
        }

        .container-mask:before, 
        .container-mask:after 
        {
        background: inherit;
        content: '';
        display: block;
        height: 50%;
        left: 0;
        position: absolute;
        right: 0;
        z-index: -1;
        -webkit-backface-visibility: hidden; // for Chrome Windows;
        }

        .container-mask:before
        {
            top: -3em;
            transform: skewY(-1.5deg);
            transform-origin: 100% 0;
            border-top: solid 3px var(--color-pink);
        }
        
        
        .container-mask:after
        {
            bottom: 0;
            transform: skewY(-1.5deg);
            transform-origin: 100%;
            border-bottom: solid 3px var(--color-pink)
        }

        @media (max-width: 990px)
        {
            .blog-cards:first-of-type
            {
                margin-right: 0;
            }
        }

        @media (min-width: 991px)
        {
            .blog-cards:first-of-type
            {
                margin-right: 1em;
            }
        }

        @media (min-width: 768px)
        {
            .main-heading
            {
                font-size: 56px;
            }
        }
    </style>
@endsection

@section('before-header')
    <div class="container-fluid d-flex center-content vh-100 flex-column" style="background-image: url('img/background/hero-image.png')">
@endsection

@section('main-content')
        <div class="flex-grow-1 d-flex center-content">
                <div class="text-center">
                    <h1 class="main-heading" style="color: white;"><span class="typed-header"></span><span class="cursor">&nbsp;</span>services</h1>
                    <h2 style="color: white">without the waffle</h2>
                    <a href="{{ route("services") }}">
                        <div class="text-center mt-5">
                            <button class="button pink-button">View Services</button>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    {{-- <div class="gradient" style="position: absolute; width: 100%; height: 100%; z-index: -2"></div> --}}
    {{-- <div class="gradient">
        @include('partials.waves-bottom')
    </div> --}}
    <div class="no-padding">
        <div class="col-12 d-flex flex-column align-items-center text-center py-5">
            <h2 style="font-size: 1.5em"> Our Services </h2>
            <p style="font-size: 1.5em; font-weight: bold;"> Those who have trusted gigawaffle </p>
            <div class="row d-flex center-content text-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <a href="{{ route('clients.projects', [ 'projectId' => '1' ]) }}">
                        <img class="border-radius-20" style="max-height: 400px;" src="{{ asset('img/project-cards/website-card-swap-my-energy.png')}}" alt="Swap My Energy project image">
                    </a>
                    <p style="font-size: 1.5em; font-weight: 500;">Swap My Energy</p>
                    <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img class="border-radius-20" style="max-height: 400px;" src="{{ asset('img/project-cards/website-card-your-business-here.png') }}" alt="Your project here image">
                    <p style="font-size: 1.5em; font-weight: 500;">Project Title</p>
                    <p style="font-weight: 300; font-style: italic">Project Category</p>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <img class="border-radius-20" src="{{ asset('img/project-cards/comingsoon.png') }}" alt="">
                        <p style="font-size: 1.5em; font-weight: 500;"> Project Title</p>
                        <p style="font-weight: 300; font-style: italic"> Project Category</p>
                </div> --}}
            </div>
            <a href="{{ route('clients') }}">
                <button class="navy-blue-button"> See All Clients </button>
            </a>
        </div>
    </div>
    {{-- <div class="gradient text-white"> --}}
        {{-- @include('partials.waves-top') --}}
        <div class="container-mask">
            <div class="container mb-5">
                <div class="col-12 d-flex flex-column align-items-center py-0 py-md-4">
                    <h2 class="pink-heading pb-3" style="padding-top: 30px;">The Process</h2>
                    <h3> All the services, without the waffle </h3>
                    <div class="row pt-5">
                        <div class="col-12 col-md-6">
                            <p style="font-weight: 600"> We pride ourselves on making it easy for you to turn your business into a brand. Whether you know exactly what you're after, or you have no clue where to begin, we'll make it a simple progress. </p>
                            <p> Our enthusiastic and passionate team will always be on hand throughout the process, allowing you to see your image come to life </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('img/world-wide-web-image.png') }}" width="100%" alt="World Wide Web Image"/>
                        </div>
                    </div>
                    <div class="w-100">
                        {{-- <h2 class="pink-heading" style="text-align:left; font-style: italic; font-size: 1.6em;"> The Process </h2> --}}
                        <ul class="caret-right-list" style="font-weight: 500;">
                            <li>Purchase your perfect package, choose from one of our existing packages or talk with one of our team.</li>
                            <li>We'll clarify any of the finer details and then get to work.</li>
                            <li>We'll regularly check back in with progress updates, ideas, designs and more, to ensure you get exactly what you're after.</li>
                        </ul>
                        <div style="text-align: center">
                            <a href="{{ route('services') }}"><button class="pink-button">Get Started</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('partials.waves-bottom') --}}
    {{-- </div> --}}
    @if (isset($blog_posts) && count($blog_posts) > 0)
        <canvas id="bubble"></canvas>
        <div class="container full-size d-flex center-content">
            <div class="col-12 d-flex flex-column align-items-center py-5">
                <h2 class="pink-heading pb-3" style="color: var(--color-navyblue)">The Waffle Corner</h2>
                <h3>The only place that we tolerate any waffle...</h3>
                <div class="container-xl" style="margin-bottom: 30px;">
                    <div class="text-container-40px" style="text-align: center;">
                        @foreach ($blog_posts as $blog_post)
                        <a href="{{ route('blog.blog-post', [ 'blogId' => $blog_post -> ID ]) }}" class="blog-post-section no-padding background-image" style="background-image: url('{{ asset($blog_post -> ImageSource) }}');">
                            <p class="blog-post-heading">{{ $blog_post -> Heading }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('blog') }}"><button class="navy-blue-button">Read More</button></a>
            </div>
        </div>
    @endif
@endsection

@section('after-footer')
@endsection

@section('script')
<script type="text/javascript" src="{{ URL::asset('js/typewriter.js') }}" async></script>
@endsection

