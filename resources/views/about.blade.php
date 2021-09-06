@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
        .timeline-section-outer
        {
            text-align: center;
            max-width: 100%;
        }

        .timeline-section
        {
            position: relative;
            display: inline-block;
            width: 700px;
            max-width: 100%;
            text-align: left;
            padding: 0 4em;
            padding-bottom: 0.5em;
            margin: 0;
        }

        .timeline-section p:first-of-type
        {
            font-weight: bold;
            font-style: italic;
            line-height: 2em;
            margin-bottom: 0.5em;
        }

        .timeline-section p:last-of-type
        {
            margin-bottom: 0px;
        }

        .timeline-section .timeline-lines
        {
            position: absolute;
            left: 2.5em;
            top: 1em;
            width: 1.2em;
            bottom: 0px;
            border-top: 1px solid var(--color-navyblue);
            border-left: 1px solid var(--color-navyblue);
        }

        .timeline-lines-2
        {
            position: absolute;
            left: 2.5em;
            top: 0;
            height: 1em;
            border-left: 1px solid var(--color-navyblue);
        }

        .timeline-section-bottom .timeline-lines
        {
            border-left: 0px;
        }

        .timeline-date
        {
            position: absolute;
            left: 1.25em;
            top: 1em;
            transform: translate(-50%, -50%) rotate(-90deg);
            font-size: 1em;
            font-weight: bold;
        }

        .google-map
        {
            object-fit: contain;
        }

        @media (min-width: 768px)
        {
            .shadow-right-md
            {
                box-shadow: 2px 1px 2px -1.5px #555;
            }
        }

        @media (max-width: 575px)
        {
            .timeline-section
            {
                padding-right: 1.5em;
                border-top: none;
                border-bottom: none;
            }
        }

        @media (min-width: 991px)
        {
            .google-map
            {

            }
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg row top-section-outer flex-grow-1 center-content-sm" style="text-align: center;">
            <div class="col-12 col-md-6 container-lg no-padding d-flex flex-column" style="text-align: left;">
                <div class="gradient-container container-no-gradient-sm" style="font-style: italic">
                    <h1>A new agency that suits you</h1>
                    <hr style="width: 150px">
                </div>
                <div class="text-container-40px flex-column flex-grow-1 d-flex center-content">
                    <p><b>For some people, understanding what is needed to elevate your business can be hard. This is where we come in. Our dedicated team at gigawaffle are ready to turn your business into a brand.</b></p>
                    <p>We're always on the look out for ways we can improve our efficiency, quality, accuracy, and more. This allows us to be on top of the latest design, development and marketing trends. We'll keep you up to date with everything gigawaffle via "The Waffle Corner".</p>
                    <div class="center-button"><a href="http://gigawaffle.co.uk/blog/"><button class="button-default">The Waffle Corner</button></a></div>
                </div>
            </div>
            <div class="col-6 d-none d-md-block">
                <img src="{{ asset('img/Thinking-man-illustration.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container no-padding">
        <h2 class="pink-heading"><b>Our Locations</b></h2>
        <h3>Where to find gigawaffle</h3>
        <div class="shadowed-card">
            <div class="row">
                <div class="col-12 col-md-8 no-padding shadow-right-md"><img class="google-map border-radius-20" src="{{ asset('img/map.png') }}"></div>
                <div class="col-12 col-md-4 m-auto text-center">
                    <img src="{{ asset('img/home-icon.png') }}" style="display: inline-block" height="30" alt="Map of our location">
                    <p style="font-size: 1.3em; font-weight: 500; display: inline-block"> Preston HQ </p>
                    <ul class="list-unstyled">
                        <li>Estate House,</li>
                        <li>Fox Street,</li>
                        <li>Preston,</li>
                        <li>PR1 2AB</li>
                        <li style="font-style: italic;">{{ env('DATA_CONTACT_EMAIL') }}</li>
                        <li style="font-style: italic;">{{ env('DATA_CONTACT_PHONE_NUMBER') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="gradient no-padding">
        @include('partials.waves-top')
        <div class="banner">
            <h2 style="font-weight: 200; margin: 20px auto; color: white; font-size: 2.5rem">Discover us</h2>
            <div style="padding: 5px 0px 25px;">
                <a href="https://www.facebook.com/Gigawaffle-110675841300819"><img class="social-img" src="{{ asset('img/social-links/facebook.svg') }}" width="50px" height="50px" alt="Facebook" /></a>
                <a href="https://twitter.com/gigawaffleuk"><img class="social-img" src="{{ asset('img/social-links/twitter.svg') }}" width="50px" height="50px" alt="Twitter" /></a>
                <a href="https://www.instagram.com/gigawaffleuk/"><img class="social-img" src="{{ asset('img/social-links/instagram.svg') }}" width="50px" height="50px" alt="Instagram" /></a>
                <a href="https://www.linkedin.com/company/gigawaffle/"><img class="social-img" src="{{ asset('img/social-links/linkedin.svg') }}" width="50px" height="50px" alt="LinkedIn" /></a>
            </div>
        </div>
        @include('partials.waves-bottom')
    </div>
    <br />
    <div class="container no-padding">
        <h2 class="pink-heading"><b>Our Story</b></h2>
        <h3>The story of gigawaffle has only just begun</h3>
        <div class="timeline-section-outer mt-5">
            <div class="timeline-section timeline-section-top">
                <div class="timeline-lines"></div>
                <div class="timeline-date">June 2021</div>
                <p>The launch of gigawaffle</p>
                <p>After many days of strategising and designing, gigawaffle was born.</p>
            </div>
            <div class="timeline-section">
                <div class="timeline-lines"></div>
                <div class="timeline-lines-2"></div>
                <div class="timeline-date">May 2021</div>
                <p>The planning stages</p>
                <p>Our team got to work on developing the site you're currently looking at and the strategy behind gigawaffle</p>
            </div>
            <div class="timeline-section timeline-section-bottom">
                <div class="timeline-lines"></div>
                <div class="timeline-lines-2"></div>
                <div class="timeline-date">April 2021</div>
                <p>The idea behind gigawaffle</p>
                <p>Whilst working as the internal design and development team at Swap My Energy, we realised that to a decent amount of people, marketing, design and coding terminology is all just waffle.</p>
                <p>We saw an opportunity to help people understand this waffle and as a result, gigawaffle was born.</p>
            </div>
        </div>
    </div>
    <br />
    <div id="contactform" class="container no-padding" style="width: 576px; max-width: 100%;">
        <h2 style="font-size: 30px;
        color: var(--color-pink);
        font-weight: bold;
        text-align: center;"><b>How can we help you?</b></h2>
        <p style="font-size: 20px; text-align: center;">Send a message</p>
        <div class="pink-box-round pink-box-merge-bottom">
            <div class="pink-box-white-striped-border pink-box-border-merge-bottom">
                <form method="post" action="{{ route('post.contact-us') }}">
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
                    @csrf
                    <div class="form-group">
                        <label for="full_name">Full Name *</label>
                        <input class="form-control" type="text" name="full_name" value="{{ old('full_name') }}" required="required" />
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
                        <label for="message">Message *</label>
                        <textarea name="message" rows="4" style="width: 100%;" required="required">{{ old('message') }}</textarea>
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
