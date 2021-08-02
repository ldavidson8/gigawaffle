@extends('layouts.master')

@section('stylesheets')
    <style>
        .services-outer
        {
            text-align: center;
        }

        .service-item
        {
            display: inline-block;
            width: 32%;
            padding: 5px;
            margin: auto;
            font-style: italic;
        }

        .service-item img
        {
            width: auto;
            max-height: 50px;
            max-width: 100%;
            margin: 17px;
        }

        .package-container p
        {
            color: gray;
        }

        .package-container h4
        {
            text-align: left;
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size-60 container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-md row top-section-outer">
            <div class="col-12 col-sm-6 col-xl-8 no-padding">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic">
                        <h1>Services that make your mouth water</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p><b>You can 'Pick n Mix' from our wide range of design, development, media & marketing services, allowing you to created a tailored package perfect for your business.</b></p>
                    <p>Not sure what services you want or want a waffle-free approach? Don't worry, we can help. Just click "Help Me Decide" below and fill in the form.</p>
                    <div class="center-button">
                        <button class="button-default">Pick n Mix</button>
                        <button class="button-alternate">Help Me Decide</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4 d-none d-sm-flex center-content">
                <img src="{{ asset('img/phone.png') }}"/>
            </div>
        </div>
    </div>
    <div class="container no-padding" style="width: 576px; max-width: 100%;">
        <h2 class="pink-heading">Get In Touch</h2>
        <h3>Don't understand all the waffle? Or can't decide? We can help.</h3>
        <p style="font-size: 20px; text-align: center;">Fill in this form and we will be back in touch with you.</p>
        <div class="pink-box-round pink-box-merge-bottom">
            <div class="pink-box-white-striped-border pink-box-border-merge-bottom">
                <form method="post" action="{{ route('post.contact-us') }}">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br /><br />
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="fullname">Full Name *</label>
                        <input class="form-control" type="text" name="fullname" value="{{ old('fullname') }}" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number (optional)</label>
                        <input class="form-control" type="text" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="form-group">
                        <label for="message">How can we help? *</label>
                        <textarea name="message" rows="4" required style="width: 100%;">{{ old('message') }}</textarea>
                    </div>
                    <div class="from-group">
                        <p>* required</p>
                    </div>
                    <div style="text-align: center;">
                        <button class="button-default" style="width: 150px; max-width: 100%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
