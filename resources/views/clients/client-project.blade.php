@extends('layouts.master')

@section('stylesheets')
    <style>
        h1
        {
            text-align: center;
            padding: 100px 0px 30px;
            font-size: 35px;
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
            <div class="col-12 col-sm-6 col-xl-6 no-padding d-flex center-content">
                <h1 style="color: black; margin: 0; padding: 20px 0;">{{ $client_project -> Heading }}</h1>
            </div>
            <div class="col-12 col-sm-6 d-flex center-content">
                <img class="border-radius-20" style="object-fit: fill;" src="{{ asset($client_project -> ImageSource) }}" alt="" />
            </div>
        </div>
    </div>
    <div class="container-lg" style="font-size: 20px;">
        <?php $project_content = explode("\r\n", $client_project -> Content) ?>
        @foreach ($project_content as $line)
            <p>{{ $line }}</p>
        @endforeach
        <a href="{{ url() -> previous(route('clients')) }}"><button class="button-default">Back</button></a>
        <br /><br />
    </div>
@endsection
