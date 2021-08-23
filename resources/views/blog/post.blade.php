@extends('layouts.master')

@section('stylesheets')
    <style>
        .purple-gradient-box
        {
            background: linear-gradient(to right, #DF4985 , #7A98EE);
        }

        .white-wave-container
        {
            position: relative;
            width: 100%;
            height: 100px;
        }

        .white-wave
        {
            overflow: hidden;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 250%;
            line-height: 0;
            direction: ltr;
            max-width: none;
            box-sizing: inherit;
            hyphens: manual;
            height: 200px;
            display: block;
            width: 250%;
            left: 50%;
            -webkit-transform: translateX(-65%) rotate(180deg);
            -ms-transform: translateX(-65%) rotate(180deg);
            transform: translateX(-65%) rotate(180deg);
        }

        .white-wave path
        {
            fill: white;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
        }

        h1
        {
            color: white !important;
            text-align: center;
            padding: 100px 0px 30px;
            font-size: 35px;
        }

        @media (max-width: 767px)
        {
            .white-wave
            {
                height: 120px;
            }

            h1
            {
                padding: 20px 0px;
            }
        }

        @media (max-width: 499px)
        {
            .white-wave-container,
            .white-wave
            {
                height: 60px;
            }

            h1
            {
                padding: 20px 0px;
            }
        }
    </style>
@endsection

@section('before-header')
@endsection

@section('main-content')
    <div class="d-flex flex-column center-content no-padding purple-gradient-box">
        <div class="container-lg row top-section-outer">
            <div class="col-12 col-sm-6 col-xl-6 no-padding d-flex center-content">
                <h1 style="color: black; margin: 0; padding: 20px 0;">{{ $blog_post -> Heading }}</h1>
            </div>
            <div class="col-12 col-sm-6 d-flex center-content">
                <img class="border-radius-20" style="object-fit: fill;" src="{{ asset($blog_post -> ImageSource) }}" alt="" />
            </div>
        </div>
        <div class="white-wave-container">
            <svg class="white-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
    </div>
    <div class="container-lg" style="font-size: 20px;">
        <?php $project_content = explode("\r\n", $blog_post -> Content) ?>
        @foreach ($project_content as $line)
            @if (is_numeric(strpos($line, "<h2>")))
                <?php
                    $line = str_replace("<h2>", "", $line);
                    $line = str_replace("</h2>", "", $line);
                ?>
                <h2 style="text-align: left;">{{ $line }}</h2>
            @else
                <p>{{ $line }}</p>
            @endif
        @endforeach
        <a href="{{ route('blog') }}"><button class="button-default">Back</button></a>
        <br /><br />
    </div>
@endsection