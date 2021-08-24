@extends('layouts.master')

@section('stylesheets')
    <style>
        .mobile-flex-column
        {
            display: -webkit-flex;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .mobile-flex-grow-1
        {
            flex-grow: 1;
        }

        .background-image
        {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 30px;
        }
        .background-image-right { background-position: right; }

        .client-project-section
        {
            margin: 50px 0px !important;
        }

        .client-project-column
        {
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            align-content: flex-start;
            justify-content: flex-start;
            font-size: 18px;
        }

        .client-project-column h2, h3
        {
            text-align: left;
        }

        .client-project-column h2
        {
            font-size: 30px !important;
            margin-bottom: 1rem;
        }

        .client-project-column h3
        {
            font-weight: 400;
        }

        .fa-long-arrow-alt-right
        {
            vertical-align: middle;
            margin-left: 0.3em;
            font-size: 25px;
        }


        /* Read more toggle button CSS */

        input.read-more-state
        {
            display: none;
        }

        p.read-more-target
        {
            font-size: 0;
            max-height: 0;
            opacity: 0;
            transition: .25s ease;
        }

        input.read-more-state:checked ~  p.read-more-target
        {
        font-size: inherit;
        max-height: 999em;
        opacity: 1;
        }
        input.read-more-state ~ label.read-more-trigger:before
        {
            font-family: "Font Awesome 5 Free";
            content: 'Read more \f245';
            font-weight: 700;
        }
        input.read-more-state:checked ~ label.read-more-trigger:before
        {
            content: 'Read less';
            font-weight: 700;
        }
        label.read-more-trigger
        {
            cursor: pointer;
            display: inline-block;
        }

        @media (max-width: 767px)
        {
            .background-image
            {
                height: 30vw;
            }

            .client-project-section
            {
                margin: 40px 0px !important;
            }
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg row top-section-outer flex-grow-1 center-content-sm">
            <div class="col-12 col-md-6 no-padding d-flex flex-column">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom no-padding" style="font-style: italic">
                        <h1>Those who have trusted gigawaffle</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px flex-column flex-grow-1 d-flex center-content">
                    <p><b>Here you'll find all of the clients we've previously worked with, what services we provided for them and what they thought of our work.</b></p>
                    <p>You can read more about a client by clicking "Learn More". If you like what you see, why not get in touch with us, and you never know, your business may appear here too.</p>
                    <div class="center-button" style="width: 100%;"><a href="{{ route('services') }}#contactform"><button class="button-default">Get In Touch</button></a></div>
                </div>
            </div>
            <div class="col-6 d-none d-md-block" style="text-align: right;">
                <img src={{ asset('img/approved-illustration.png') }}>
            </div>
        </div>
    </div>
    <div class="text-container-40px container-xl">
        @for ($i = 0; $i < count($client_projects); $i++)
            <?php
                $client_project = $client_projects[$i];
                $project_image_order_classes = "";
                $project_text_order_classes = "";

                if ($i % 2 == 1) // if the index is odd
                {
                    $project_image_order_classes = "order-1 order-md-2";
                    $project_text_order_classes = "order-2 order-md-1";
                }
                $short_content = explode("\r\n", $client_project -> ShortContent)
            ?>
            <div class="client-project-section row no-padding">
                <a href="{{ route('clients.projects', [ 'projectId' => $client_project -> ID ]) }}" class="col-12 col-md-4 col-lg-4 {{ $project_image_order_classes }} background-image" style="background-image: url('{{ asset($client_project -> ImageSource) }}');"></a>
                <div class="col-12 col-md-8 col-xl-8 {{ $project_text_order_classes }} client-project-column" style="padding-top: 10px;">
                    {{-- @if (count($short_content) > 1) <input type="checkbox" class="read-more-state" id="read-more-controller"> @endif --}}
                    <div class="temp-img-card-2"></div>
                    <h2>{{ $client_project -> Heading }}</h2>
                    <h3>{{ $client_project -> SubHeading }}</h3>
                    @for ($j = 0; $j < count($short_content); $j++)
                        {{-- <p <?= ($j > 0) ? "class='read-more-target'" : '' ?>> --}}
                        <p>{{ $short_content[$j] }}</p>
                    @endfor
                    {{-- @if (count($short_content) > 1) <label for="read-more-controller" class="read-more-trigger"></label> @endif --}}
                    <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => $client_project -> ID ]) }}">Learn more<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        @endfor
    </div>
@endsection
