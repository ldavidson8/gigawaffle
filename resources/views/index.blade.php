@extends('layouts.master')

@section('stylesheets')
<style>
    .gradient-container-text-white
    {
        color: #ffffff
    }

    .caret-right-list
    {
        list-style-type: none;
    }

    ul.caret-right-list li:before 
    {    
    font-family: 'FontAwesome';
    content: '\f0da';
    margin:0 5px 0 -15px;
    color: var(--primary-color);
    }

    .blog-cards:first-of-type
    {
        margin-right: 2em;
    }
</style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column">
@endsection

@section('main-content')
        <div class="row flex-grow-1 no-padding">
            <div class="d-none d-lg-block col-2"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="gradient-container container-no-gradient-sm d-flex center-content" style="min-height: 40vh;">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic">
                    <h1>Marketing and web design that tickles your taste buds</h1>
                    <hr style="width: 150px">
                    </div>
                </div>
                <div style="padding: 40px">
                <p style="font-weight: 700;">
                    We're gigawaffle; we want to turn businesses into brands. With plenty of options across web design, marketing and media, you're truly in control when it comes to your business.
                </p>
                <p style="font-family: Poppins"> 
                    You can pick and choose from a range of services, allowing you to build the perfect package for your business.
                </p>
                <div class="center-button">
                <button class="navy-blue-button">View Services</button>
                </div>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex center-content">
                <img src="{{ asset('img/code-snippet.png') }}"/>
            </div>
        </div>
    </div>
    <div class="gradient text-white no-padding">
        <img class="waves-image-top" src="{{ asset('img/wavesOpacity-top.png') }}">
        <div class="col-12 d-flex flex-column align-items-center py-5">
            <h2 style="font-size: 1.5rem"> Our Services </h2>
            <p style="font-size: 1.5em"> Those who have trusted gigawaffle </p>
            <div class="row d-flex center-content text-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x350" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-12 col-md-6 navy-blue-buttoncol-lg-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x350" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x350" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
            </div>
            <button class="navy-blue-button"> See All Clients </button>
        </div>
        <img class="waves-image-bottom" src="{{ asset('img/wavesOpacity-bottom.png') }}">
    </div>
    <div class="container">
        <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="pink-heading"> The Process </h2>
            <p> All the services, without the waffle </p>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p style="font-weight: 600"> We pride ourselves on making it easy for you to turn your business into a brand. Whether you know exactly what you're after, or you have no clue where to begin, we'll make it a simple progress. </p>
                    <p> Our enthusiastic and passionate team will always be on hand throughout the process, allowing you to see your image come to life </p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ asset('img/world-wide-web-image.png') }}"/>
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
                    <button class="navy-blue-button">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12 d-flex flex-column align-items-center py-5">
            <h2 class="pink-heading"> The Waffle Corner </h2>
            <p> The only place we tolerate any waffle... </p>
            <div class="row d-flex pb-4 pt-3">
                <img class="border-radius-20 blog-cards" src="https://via.placeholder.com/350x250">
                <img class="border-radius-20 blog-cards" src="https://via.placeholder.com/350x250">
            </div>
            <button class="navy-blue-button">Read More </button>
        </div>
    </div>
@endsection
