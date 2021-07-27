@extends('layouts.master')

@section('stylesheets')
    <style>
        h1
        {
            display: inline-block;
            border-bottom: 6px solid #000733;
            color: #000733;
            font-style: italic;
            margin-bottom: 20px;
        }

        .small-pink-heading
        {
            text-align: center;
            text-transform: uppercase;
            color: #DF4985;
            font-size: 16px;
        }

        b
        {
            font-weight: 600;
        }

        .button-default
        {
            border: none;
            border-radius: 17px;
            background-color: #000733;
            color: white;
            padding: 5px 20px;
            font-weight: 600;
        }

        .shadowed-card
        {
            box-shadow: 0px 2px 3px 0px #000733;
            border-radius: 20px;
        }
        
        .social-img
        {
            margin: 5px;
        }
        

        .banner
        {
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 19.5px;
            font-weight: 300;
        }

        .pink-box
        {
            background-color: #DF4985;
            color: white;
        }

        .pink-box-round
        {
            border-radius: 20px;
            background-color: #DF4985;
            color: white;
        }

        .pink-box-merge-bottom
        {
            border-radius: 20px 20px 0px 0px !important;
        }
        
        .pink-box-white-striped-border
        {
            border: 4px dashed white;
            border-radius: 20px;
            padding: 20px;
        }

        .pink-box-border-merge-bottom
        {
            border-bottom: none;
            border-radius: 20px 20px 0px 0px !important;
        }
        
        @media (max-width: 575px)
        {
            .pink-box-round
            {
                border-radius: 0px !important;
            }

            .pink-box-merge-bottom
            {
                border-radius: 0px !important;
            }
            
            .pink-box-white-striped-border
            {
                border: none;
                border-radius: 0px;
                padding: 17px 20px 0px;
            }

            .pink-box-border-merge-bottom
            {
                border-radius: 0px !important;
            }
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size-60 container-fluid d-flex flex-column">
@endsection

@section('main-content')
        <div class="flex-grow-1 no-padding center-content d-flex" style="padding: 30px;">
            <div class="container no-padding">
                <h1>A new agency that suits you</h1>
                <p><b>For some people, understanding what is needed to elevate your business can be hard. This is where we come in. Our dedicated team at gigawaffle are ready to turn your business into a brand.</b></p>
                <p>We're always on the look out for ways we can improve our efficiency, quality, accuracy, and more. This allows us to be on top of the latest design, development and marketing trends. We'll keep you up to date with everything gigawaffle via "The Waffle Corner".</p>
                <br />
                <button class="button-default">The Waffle Corner</button>
            </div>
        </div>
    </div>
    <div class="container no-padding">
        <p class="small-pink-heading"><b>Our Locations</b></p>
        <h2>Where to find gigawaffle</h2>
        <div class="shadowed-card" style="height: 400px;"></div>
    </div>
    <br />
    <div class="container-fluid banner gradient">
        <h2 style="font-weight: 200; margin: 20px auto;">Discover us</h2>
        <div style="padding: 5px 0px 25px;">
            <img class="social-img" src="{{ asset('img/social-links/facebook.svg') }}" width="50px" height="50px" />
            <img class="social-img" src="{{ asset('img/social-links/twitter.svg') }}" width="50px" height="50px" />
            <img class="social-img" src="{{ asset('img/social-links/linkedin.svg') }}" width="50px" height="50px" />
            <img class="social-img" src="{{ asset('img/social-links/tiktok.svg') }}" width="50px" height="50px" />
            <img class="social-img" src="{{ asset('img/social-links/instagram.svg') }}" width="50px" height="50px" />
            <img class="social-img" src="{{ asset('img/social-links/youtube.svg') }}" width="50px" height="50px" />
        </div>
    </div>
    <br />
    <div class="container no-padding">
        <p class="small-pink-heading"><b>Our Story</b></p>
        <h2>The story of gigawaffle has only just begun</h2>
        <div style="height: 400px;"></div>
    </div>
    <div class="container no-padding" style="width: 576px; max-width: 100%;">
        <p class="small-pink-heading"><b>Get In Touch</b></p>
        <h2>Want to work with us?</h2>
        <p style="font-size: 20px; text-align: center;">Fill in this form and we will be back in touch with you.</p>
        <div class="pink-box-round pink-box-merge-bottom">
            <div class="pink-box-white-striped-border pink-box-border-merge-bottom">
                <form method="post" action="{{ route('post.work-with-us') }}">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name *</label>
                        <input class="form-control" type="text" name="fullname" value="{{ old('fullname', 'Mark Graham') }}" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email', 'mark.graham004@protonmail.com') }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number (optional)</label>
                        <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="message">Message (optional)</label>
                        <textarea name="message" required="required" rows="4" style="width: 100%;">{{ old('message') }}</textarea>
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
    <div class="pink-box banner">Find us on social media @gigawaffle</div>
@endsection
