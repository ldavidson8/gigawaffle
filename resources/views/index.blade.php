@extends('layouts.master')

@section('stylesheets')
<style>
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
</style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
    <div class="container-lg row top-section-outer">
            <div class="col-12 col-md-6 no-padding">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom" style="font-style: italic">
                        <h1>Marketing and web design that tickles your taste buds</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p class="text-white-outline" style="font-weight: 700;">
                        We're gigawaffle; we want to turn businesses into brands. With plenty of options across web design, marketing and media, you're truly in control when it comes to your business.
                    </p>
                    <p class="text-white-outline">
                        You can pick and choose from a range of services, allowing you to build the perfect package for your business.
                    </p>
                    <div class="center-button">
                        <a href="{{ route("services") }}">
                        <button class="button-default">View Services</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex center-content">
                <img src="{{ asset('img/code-snippet.png') }}"/>
            </div>
        </div>
    </div>
    <div class="gradient text-white no-padding">
        @include('partials.waves-top')
        <div class="col-12 d-flex flex-column align-items-center text-center py-5">
            <h2 style="font-size: 1.5em"> Our Services </h2>
            <p style="font-size: 1.5em; font-weight: bold;"> Those who have trusted gigawaffle </p>
            <div class="row d-flex center-content text-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ route('clients.projects', [ 'projectId' => '1' ]) }}">
                    <img class="border-radius-20" src="{{ asset('img/project-cards/sme-card.png')}}" alt="">
                    </a>
                        <p style="font-size: 1.5em; font-weight: 500;"> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <img class="border-radius-20" src="{{ asset('img/project-cards/comingsoon.png') }}" alt="">
                        <p style="font-size: 1.5em; font-weight: 500;"> Project Title</p>
                        <p style="font-weight: 300; font-style: italic"> Project Category</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <img class="border-radius-20" src="{{ asset('img/project-cards/comingsoon.png') }}" alt="">
                        <p style="font-size: 1.5em; font-weight: 500;"> Project Title</p>
                        <p style="font-weight: 300; font-style: italic"> Project Category</p>
                </div>
            </div>
            <a href="{{ route('clients') }}">
            <button class="navy-blue-button"> See All Clients </button>
            </a>
        </div>
        @include('partials.waves-bottom')
    </div>
    <div class="container">
        <div class="col-12 d-flex flex-column align-items-center py-0 py-md-4">
            <h2 class="pink-heading pb-3" style="padding-top: 30px;">The Process</h2>
            <h3> All the services, without the waffle </h3>
            <div class="row pt-5">
                <div class="col-12 col-md-6">
                    <p style="font-weight: 600"> We pride ourselves on making it easy for you to turn your business into a brand. Whether you know exactly what you're after, or you have no clue where to begin, we'll make it a simple progress. </p>
                    <p> Our enthusiastic and passionate team will always be on hand throughout the process, allowing you to see your image come to life </p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ asset('img/world-wide-web-image.png') }}" width="100%"/>
                </div>
            </div>
            <div class="w-100">
                <h2 class="pink-heading" style="text-align:left; font-style: italic; font-size: 1.6em;"> The Process </h2>
                <ul class="caret-right-list" style="font-weight: 500;">
                    <li>Purchase your perfect package, choose from one of our existing packages or talk with one our team.</li>
                    <li>We'll clarify any of the finer details and then get to work.</li>
                    <li>We'll regularly check back in with progress updates, ideas, designs and more, to ensure you get exactly what you're after.</li>
                </ul>
                <div style="text-align: center">
                    <a href="{{ route('services') }}"><button class="navy-blue-button">Get Started</button></a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="bubble"></canvas>
    <div class="container">
        <div class="col-12 d-flex flex-column align-items-center py-5">
            <h2 class="pink-heading pb-3" style="color: var(--color-navyblue)"> The Waffle Corner </h2>
            <h3> The only place we tolerate any waffle... </h3>
            <div class="row d-flex justify-content-center pb-4 pt-0 pt-md-5">
                <a class="blog-card-link" href="http://gigawaffle.co.uk/blog/2021/08/09/waffle-fundamentals-what-is-copywriting/">
                    <div class="post-content">
                        <p class="blog-cards-text"> Waffle Fundamentals: What is Copywriting?</p>
                        <div class="meta"> <i class="far fa-calendar-alt"></i> 09 Aug 2021 </div>
                    </div>
                    <img class="border-radius-20 blog-cards" src="{{ asset('img/blog-cards/blog-card-1.png') }}">
                </a>
                <a class="blog-card-link" href="http://gigawaffle.co.uk/blog/2021/08/08/welcome-to-the-waffle-corner/">
                    <div class="post-content">
                        <p class="blog-cards-text"> Welcome to the Waffle Corner</p>
                        <div class="meta"> <i class="far fa-calendar-alt"></i> 08 Aug 2021 </div>
                    </div>
                    <img class="border-radius-20 blog-cards" src="{{ asset('img/blog-cards/blog-card-2.png') }}">
                </a>
            </div>
            <!-- Change to live site blog url when site is ready to launch --><a href="http://gigawaffle.co.uk/blog/"><button class="navy-blue-button"> Read More </button></a>
        </div>
    </div>
@endsection
