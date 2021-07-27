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

    .waves-image
    {
        position: absolute;
        bottom: -50px;
        width: 100%;
        z-index: 3;
    }

    @media (min-width: 576px)
{
    .container-no-gradient-sm
    {
    background-image: none;
    width: 100%;
    padding: 0 20px;
    margin: 0;
    }

    .gradient-container h1
    {
        color: var(--heading-color)
    }

    .align-item-bottom
    {
        align-self: flex-end;
    }

    hr 
    {
        
        border: 3px solid var(--heading-color);
        margin: 0;
    }

    .center-button
    {
        text-align: initial;
    }
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
                <div class="gradient-container container-no-gradient-sm d-flex center-content" style="height: 40vh;">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic">
                    <h1>Marketing and web design that tickles your taste buds</h1>
                    <hr style="width: 150px">
                    </div>
                </div>
                <div style="padding: 40px">
                <p style="font-weight: 700;">
                    We're gigawaffle; we want to turn businesses into brands. With plenty of options across web design, marketing and media, you're truly in control when it comes to your business.
                </p>
                <p> 
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
        <img class="waves-image" src="{{ asset('img/wavesOpacity.png') }}">
    </div>
    <div class="full-size-80 container-fluid gradient-container text-white">
        <div class="col-12 d-flex flex-column align-items-center pt-5">
            <h2> Our Services </h2>
            <p> Those who have trusted gigawaffle </p>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x400" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x400" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
                <div class="col-4">
                    <img class="border-radius-20" src="https://via.placeholder.com/300x400" alt="">
                        <p> Swap My Energy</p>
                        <p style="font-weight: 300; font-style: italic">Web Development Project</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12 d-flex flex-column align-items-center">
            <h3> The Process </h3>
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
                <h3> The Process </h3>
                <ul class="caret-right-list">
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
        <div class="col-12 d-flex flex-column align-items-center">
            <h4> The Waffle Corner </h4>
            <p> The only place we tolerate any waffle... </p>
            <div class="row d-flex">
                <img class="border-radius-20 blog-cards" src="https://via.placeholder.com/350x250">
                <img class="border-radius-20 blog-cards" src="https://via.placeholder.com/350x250">
            </div>
            <button class="navy-blue-button">Read More </button>
        </div>
    </div>
@endsection
