@extends('layouts.master')

@section('stylesheets')
    <style>
        h1
        {
            display: inline-block;
            border-bottom: 6px solid #000733;
            color: #000733;
            font-style: italic;
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column">
@endsection

@section('main-content')
        <div class="container">
            <div class="flex-grow-1 no-padding center-content" style="padding: 30px;">
                <h1>A new agency that suits you</h1>
                <p><b>For some people, understanding what is needed to elevate your business can be hard. This is where we come in. Our dedicated team at gigawaffle are ready to turn your business into a brand.</b></p>
                <p>We're always on the look out for ways we can improve our efficiency, quality, accuracy, and more. This allows us to be on top of the latest design, development and marketing trends. We'll keep you up to date with everything gigawaffle via "The Waffle Corner".</p>
            </div>
        </div>
    </div>
@endsection
