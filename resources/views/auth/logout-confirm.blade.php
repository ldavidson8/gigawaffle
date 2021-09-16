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
                        <h1>Are you sure you want to logout?</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p>
                        <a href="{{ url() -> previous(route('home')) }}" id="link-back">
                            <button class="btn btn-lg rounded-blue-button logout-button" style="color: white; background-color: #00bb00;">No</button>
                        </a>
                        <a href="{{ route('logout') }}">
                            <button class="btn btn-lg rounded-blue-button logout-button" style="color: white; background-color: #7A98EE;">Yes</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
@endsection

@section('after-footer')
    </div>
@endsection
