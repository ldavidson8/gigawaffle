@extends('layouts.master')

@section('stylesheets')
    <style>
        h1
        {
            text-align: center;
            padding: 100px 0px 30px;
            font-style: normal;
        }

        picture, img, picture > source
        {
            max-width: 100%;
            border-radius: 20px;
        }

        @media (max-width: 767px)
        {
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
    <div class="d-flex flex-column center-content no-padding">
        <div class="container-lg row top-section-outer">
            <div class="col-12 col-sm-6 col-xl-6 no-padding">
                <div class="d-flex center-content">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic;">
                        <h1 style="color: black;">{{ $client_project -> Heading }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 d-flex center-content">
                <img class="border-radius-20" style="object-fit: fill;" src="{{ asset($client_project -> ImageSource) }}" alt="" />
            </div>
        </div>
    </div>
    <div class="container-lg" style="font-size: 20px;">
        {{-- TODO: use for loop to render paragraphs --}}
        <?= $client_project -> Content ?>
        <a href="{{ url() -> previous(route('clients')) }}"><button class="button-default">Back</button></a>
        <br /><br />
    </div>
@endsection
