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

        .package-container
        {
            box-shadow: 0px 2px 3px 0px #000733;
            border-radius: 20px;
            background-color: var(--color-white);
            padding: 25px;
            text-align: left;
        }

        .package-container-header
        {
            text-align: left;
        }

        .package-container p
        {
            color: gray;
        }

        @media (min-width: 767px)
        {
            .package-container
            {
                box-shadow: none;
                border-radius:0;
                background-color: transparent;
            }

            .package-container:nth-child(2n+2)
            {
                text-align: right;
            }

            .package-container-header:nth-of-type()
            {
                text-align: right;
            }
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-md row top-section-outer">
            <div class="col-12 col-md-6 no-padding">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom" style="font-style: italic">
                        <h1>Services that make your mouth water</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p><b>You can 'Pick n Mix' from our wide range of design, development, media & marketing services, allowing you to created a tailored package perfect for your business.</b></p>
                    <p>Not sure what services you want or want a waffle-free approach? Don't worry, we can help. Just click "Help Me Decide" below and fill in the form.</p>
                    <div class="center-button">
                        <a href="{{ route("service-selection") }}">
                        <button class="button-default"">Pick n Mix</button>
                        </a>
                        <a href="{{ route('services') }}#services-contactform">
                            <button class="button-alternate">Help Me Decide</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex center-content">
                <img src="{{ asset('img/services-illustration.png') }}"/>
            </div>
        </div>
    </div>
    <div class="container-lg no-padding">
        <h2 class="pink-heading"><b>Our Services</b></h2>
        <h3>What we offer</h3>
        <div class="services-outer">
            <div class="service-item">
                <img src="{{ asset('img/services-icons/brand-design.svg') }}" alt="" />
                <p>Brand Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/web-development.svg') }}" alt="" />
                <p>Web Development</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/ui-design.svg') }}" alt="" />
                <p>UI Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/graphic-design.svg') }}" alt="" />
                <p>Graphic Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/packaging-design.svg') }}" alt="" />
                <p>Packaging Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/staff-systems.svg') }}" alt="" />
                <p>Staff Systems</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/seo.svg') }}" alt="" />
                <p>SEO</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/copywriting.svg') }}" alt="" />
                <p>Copyrighting</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/digital-marketing.svg') }}" alt="" />
                <p>Digital Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/content-marketing.svg') }}" alt="" />
                <p>Content Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/affiliate-marketing.svg') }}" alt="" />
                <p>Affiliate Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/email-marketing.svg') }}" alt="" />
                <p>Email Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/video-content.svg') }}" alt="" />
                <p>Video Content</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/autio-content.svg') }}" alt="" />
                <p>Audio Content</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/social-content.svg') }}" alt="" />
                <p>Social Content</p>
            </div>
        </div>

        <br /><br />

        <h2 class="pink-heading">Our Packages</h2>
        <h3>Packages that make it easy for you</h3>

        <div class="row" style="padding: 20px 0px;">
            <div class="package-container col-12 col-md-6">
                <img src="{{ asset('img/services-packages/fan-icon.png') }}" alt="" />
                <h4 class="package-container-header">From Business To Brand</h4>
                <p>Turn you business into a brand with this package. We'll sort out your brand design, social media marketing, content marketing and media content to upgrade your business.</p>
                <a href="" class="pink-link">Learn More</a>
            </div>
            <div class="d-none d-md-block col-md-6">
                <img src="{{ asset('img/services-packages/megaphone.png') }}" alt="" />
            </div>
        </div>
        <div class="row" style="padding: 20px 0px;">
            <div class="d-none d-md-block col-md-6">
                <img src="{{ asset('img/services-packages/desktop.png') }}" alt="" />
            </div>
            <div class="package-container col-12 col-md-6">
                <img src="{{ asset('img/services-packages/globe.png') }}" alt="" />
                <h4 class="package-container-header">Time To Get Connected</h4>
                <p>We'll get your business online by creating a website to suit your business. We will do some basic SEO work to push your business up Google's search engine.</p>
                <a href="" class="pink-link">Learn More</a>
            </div>
        </div>
        <div class="row" style="padding: 20px 0px;">
            <div class="package-container col-12 col-md-6">
                <img src="{{ asset('img/services-packages/smartphone.png') }}" alt="" />
                <h4 class="package-container-header">It's Time To Upgrade</h4>
                <p>Want a bespoke and future-proof website? We will create a mobile ready website, so your customers can enjoy what you offer at any time or place.</p>
                <a href="" class="pink-link">Learn More</a>
            </div>
            <div class="d-none d-md-block col-md-6">
                <img src="{{ asset('img/services-packages/mobile.png') }}" alt="" />
            </div>
        </div>
        <div style="text-align: center;">
            <a href=""><button class="button-default">View Packages</button></a>
        </div>
        <br />
    </div>
    <div id="services-contactform" class="container no-padding" style="width: 576px; max-width: 100%;">
        <h2 class="pink-heading">Get In Touch</h2>
        <h3>Don't understand all the waffle? &#x1F92F; <br> Or can't decide? We can help.</h3>
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
                        <label for="message">Message *</label>
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
