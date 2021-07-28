@extends('layouts.master')

@section('stylesheets')
    <style>
    </style>
@endsection

@section('before-header')
    <div class="full-size-60 container-fluid d-flex flex-column">
@endsection

@section('main-content')
        <div class="container-lg row top-section-outer">
            <div class="col-12{{-- col-sm-6 col-xl-8 --}} no-padding">
                <div class="gradient-container container-no-gradient-sm d-flex center-content">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic">
                        <h1>A new agency that suits you</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div style="padding: 40px">
                    <p><b>For some people, understanding what is needed to elevate your business can be hard. This is where we come in. Our dedicated team at gigawaffle are ready to turn your business into a brand.</b></p>
                    <p>We're always on the look out for ways we can improve our efficiency, quality, accuracy, and more. This allows us to be on top of the latest design, development and marketing trends. We'll keep you up to date with everything gigawaffle via "The Waffle Corner".</p>
                    <div class="center-button"><button class="button-default">The Waffle Corner</button></div>
                </div>
            </div>
            {{-- <div class="col-sm-6 col-xl-4 d-none d-sm-flex center-content">
                <img src="{{ asset('img/code-snippet.png') }}"/>
            </div> --}}
        </div>
    </div>
    <div class="container no-padding">
        <h2 class="pink-heading"><b>Our Locations</b></h2>
        <h3>Where to find gigawaffle</h3>
        <div class="shadowed-card" style="height: 400px;"></div>
    </div>
    <br />
    <div class="gradient no-padding">
        <img class="waves-image-top" src="{{ asset('img/wavesOpacity-top.png') }}" />
        <div class="banner">
            <h2 style="font-weight: 200; margin: 20px auto;">Discover us</h2>
            <div style="padding: 5px 0px 25px;">
                <a href="https://www.facebook.com/swapmyenergyuk"><img class="social-img" src="{{ asset('img/social-links/facebook.svg') }}" width="50px" height="50px" /></a>
                <a href="https://twitter.com/swapmyenergyuk"><img class="social-img" src="{{ asset('img/social-links/twitter.svg') }}" width="50px" height="50px" /></a>
                <a href="https://www.instagram.com/swapmyenergyuk"><img class="social-img" src="{{ asset('img/social-links/linkedin.svg') }}" width="50px" height="50px" /></a>
                <a href="https://www.tiktok.com/@swapmyenergyuk"><img class="social-img" src="{{ asset('img/social-links/tiktok.svg') }}" width="50px" height="50px" /></a>
                <a href="https://www.linkedin.com/company/swapmyenergyuk/"><img class="social-img" src="{{ asset('img/social-links/instagram.svg') }}" width="50px" height="50px" /></a>
                <a href="https://www.youtube.com/channel/UC7u_949FAQeV9FlZm4dH7lQ"><img class="social-img" src="{{ asset('img/social-links/youtube.svg') }}" width="50px" height="50px" /></a>
            </div>
        </div>
        <img class="waves-image-bottom" src="{{ asset('img/wavesOpacity-bottom.png') }}" style="position: relative; top: 1px;" />
    </div>
    <br />
    <div class="container no-padding">
        <h2 class="pink-heading"><b>Our Story</b></h2>
        <h3>The story of gigawaffle has only just begun</h3>
        <div class="shadowed-card" style="height: 400px;"></div>
    </div>
    <br />
    <div class="container no-padding" style="width: 576px; max-width: 100%;">
        <h2 class="pink-heading"><b>Get In Touch</b></h2>
        <h3>Want to work with us?</h3>
        <p style="font-size: 20px; text-align: center;">Fill in this form and we will be back in touch with you.</p>
        <div class="pink-box-round pink-box-merge-bottom">
            <div class="pink-box-white-striped-border pink-box-border-merge-bottom">
                <form method="post" action="{{ route('post.work-with-us') }}">
                    @csrf
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
                        <label for="message">Message (optional)</label>
                        <textarea name="message" rows="4" style="width: 100%;">{{ old('message') }}</textarea>
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
