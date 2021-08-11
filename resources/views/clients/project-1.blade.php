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
                        <h1 style="color: black;">Swap My Energy</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 center-content">
                <img src="{{ asset('img/clients-images/sme-client.png') }}" alt="" />
            </div>
        </div>
    </div>
    <div class="container-lg" style="font-size: 20px;">
        <p>For Swap My Energy, Gigawaffle produced a website from scratch including interactable forms, a dedicated switch for business and residential sites and a complete API (Application Programming Interface). We also completely designed their site, logos, and branding. This included copy writing for their self-promotion and documents.</p>
        <p>We also managed the brands social media, setting up a Twitter, Instagram, LinkedIn, and Facebook page. We helped them design a style model, a comprehensive document that helps them keep a consistent tone across their social feeds. We also helped them design written and visual content for their social feeds. </p>
        <a href="{{ url() -> previous(route('clients')) }}"><button class="button-default">Back</button></a>
        <br /><br />
    </div>
@endsection
