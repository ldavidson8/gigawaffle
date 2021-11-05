@extends('layouts.master')

@section('title')
    Find Digital Marketing Services with Gigawaffle
@stop

@section('description')
    Gigawaffle has any Digital marketing services you could need. From 
    Web development, UI design, Brand Design and Graphic Design all the way to 
    Copywriting, Video and audio content and social media management.
@stop

@section('keywords', 'Brand Design, Web Development, UI Design, Graphic Design, 
Packaging Design, Staff Systems, SEO, Copywriting, Digital Marketing, Content 
Marketing, Affiliate Marketing, Email Marketing, Video Content, Audio Content, 
social media, Photography')

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
        <div class="container-lg row top-section-outer flex-grow-1 center-content-sm">
            <div class="col-12 col-md-6 no-padding d-flex flex-column">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom no-padding" style="font-style: italic">
                        <h1>Services that make your mouth water</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px flex-column flex-grow-1 d-flex center-content">
                    <p><b>You can 'Pick n Mix' from our wide range of design, development, media & marketing services, allowing you to create a tailored package perfect for your business.</b></p>
                    <p>Not sure what services you want or want a waffle-free approach? Don't worry, we can help. Just click "Help Me Decide" below and fill in the form.</p>
                    <div class="center-button" style="width: 100%;">
                        <a href="{{ route("service-selection") }}">
                        <button class="navy-blue-button mb-4 mb-sm-0">Pick n Mix</button>
                        </a>
                        <a href="{{ route('services') }}#services-contactform">
                            <button class="pink-button">Help Me Decide</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-none d-md-block" style="text-align: right;">
                <img src="{{ asset('img/services-illustration.png') }}"/>
            </div>
        </div>
    </div>
    <div class="container-lg no-padding">
        <h2 class="pink-heading"><b>Our Services</b></h2>
        <h3>What we offer</h3>
        <div class="services-outer">
            <div class="service-item">
                <img src="{{ asset('img/services-icons/brand-design.svg') }}" alt="Brand Design" />
                <p>Brand Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/web-development.svg') }}" alt="Web Development" />
                <p>Web Development</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/ui-design.svg') }}" alt="UI Design" />
                <p>UI Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/graphic-design.svg') }}" alt="Graphic Design" />
                <p>Graphic Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/packaging-design.svg') }}" alt="Packaging Design" />
                <p>Packaging Design</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/staff-systems.svg') }}" alt="Staff Systems" />
                <p>Staff Systems</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/seo.svg') }}" alt="SEO" />
                <p>SEO</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/copywriting.svg') }}" alt="Copywriting" />
                <p>Copywriting</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/digital-marketing.svg') }}" alt="Digital Marketing" />
                <p>Digital Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/content-marketing.svg') }}" alt="Content Marketing" />
                <p>Content Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/affiliate-marketing.svg') }}" alt="Affiliate Marketing" />
                <p>Affiliate Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/email-marketing.svg') }}" alt="Email Marketing" />
                <p>Email Marketing</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/video-content.svg') }}" alt="Video Content" />
                <p>Video Content</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/autio-content.svg') }}" alt="Audio Content" />
                <p>Audio Content</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('img/services-icons/social-content.svg') }}" alt="Social Media Content" />
                <p>Social Content</p>
            </div>
        </div>

        <br /><br />

        <h2 class="pink-heading">Our Packages</h2>
        <h3>Packages that make it easy for you</h3>

        <div class="row" style="padding: 20px 0px;">
            <div class="package-container col-12 col-md-6">
                <img src="{{ asset('img/services-packages/fan-icon.png') }}" alt="" />
                <h4 class="package-container-header mt-2">From Business To Brand</h4>
                <p>Turn your business into a brand with this package. We'll sort out your brand design, social media posts, physical branding and copyright to upgrade your business.</p>
                <a id="B2B" href="{{ route('services') }}#services-contactform" class="pink-link" data-template='Hi I would like to learn more about the "From Business to Brand" package.'>Click to inquire in the form below</a>
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
                <h4 class="package-container-header mt-2">Time To Get Connected</h4>
                <p>We'll get your business online by creating a website to suit your business. We will do some basic SEO work to push your business up Google's search engine.</p>
                <a href="{{ route('services') }}#services-contactform" class="pink-link" data-template='Hi I would like to learn more about the "Time To Get Connected" package.'>Click to inquire in the form below</a>
            </div>
        </div>
        <div class="row" style="padding: 20px 0px;">
            <div class="package-container col-12 col-md-6">
                <img src="{{ asset('img/services-packages/smartphone.png') }}" alt="" />
                <h4 class="package-container-header mt-2">It's Time To Upgrade</h4>
                <p>Want a bespoke and future-proof website? We will create a mobile ready website, so your customers can enjoy what you offer at any time or place.</p>
                <a href="{{ route('services') }}#services-contactform" class="pink-link" data-template='Hi I would like to learn more about the "It&apos;s Time To Upgrade" package.'>Click to inquire in the form below</a>
            </div>
            <div class="d-none d-md-block col-md-6">
                <img src="{{ asset('img/services-packages/mobile.png') }}" alt="" />
            </div>
        </div>
        {{-- <div style="text-align: center;">
            <a href=""><button class="button-default">View Packages</button></a>
        </div> --}}
        <br />
    </div>
    <div id="services-contactform" class="container no-padding" style="width: 576px; max-width: 100%;">
        <h2 class="pink-heading">Help Me Decide</h2>
        <h3>
            Don't understand all the waffle?<br />
            Did our website blow your mind?<br />
            <span style="background-color: #00a2ab; border-radius: 50%; font-size: 25px; width: 1.4em; height: 1.4em;" class="d-inline-flex flex-column center-content">&#x1F92F;</span><br />
            Can't decide?<br />
            We can help.
        </h3>
        <p style="font-size: 20px; text-align: center;">Fill in this form and we will be back in touch with you.</p>
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
                        <textarea id="message-box" name="message" rows="4" required style="width: 100%;">{{ old('message') }}</textarea>
                    </div>
                    <div class="form-group">
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


@section('script')
<script>
$('a.pink-link').click(function(e){
    $('#message-box').val($(this).data('template'));
});
</script>
@endsection
