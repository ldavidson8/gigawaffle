@extends('layouts.master')

@section('stylesheets')
    <style>
        .gradient-container
        {
            padding-top: 50px;
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column no-padding">
@endsection

@section('main-content')
        <div class="flex-grow-1">
            <div class="container-lg no-padding">
                <div class="gradient-container container-no-gradient-sm">
                    <div class="align-item-bottom no-padding" style="padding: 0 20px; font-style: italic; text-align: left;">
                        <h1>Success!</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p><a href="{{ url('sitemap.xml') }}"><button class="button-default">Sitemap</button></a></p>
                </div>
            </div>
        </div>
@endsection
