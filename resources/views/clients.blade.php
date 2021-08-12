@extends('layouts.master')

@section('stylesheets')
    <style>
        .background-image
        {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 30px;
        }
        .background-image-right { background-position: right; }
        
        .background-image-coffee-shop { background-image: url("{{ asset('img/background/coffee-shop_full.png') }}"); }
        .background-image-docks { background-image: url("{{ asset('img/background/docks_full.jpg') }}"); }
        .background-image-plant { background-image: url("{{ asset('img/background/hydropower-plant_full.png') }}"); }
        .background-image-market { background-image: url("{{ asset('img/background/market_full.jpg') }}"); }
        .background-image-powerline { background-image: url("{{ asset('img/background/powerline_full.png') }}"); }
        .background-image-preston { background-image: url("{{ asset('img/background/preston_full.jpg') }}"); }
        .background-image-train { background-image: url("{{ asset('img/background/train_full.jpg') }}"); }
        .background-image-windturbines { background-image: url("{{ asset('img/background/wind-turbines_full.png') }}"); }
        
        @media (max-width: 1000px) and (max-height: 563px)
        {
            .background-image-coffee-shop { background-image: url("{{ asset('img/background/coffee-shop_half.png') }}"); }
            .background-image-docks { background-image: url("{{ asset('img/background/docks_half.jpg') }}"); }
            .background-image-plant { background-image: url("{{ asset('img/background/hydropower-plant_half.png') }}"); }
            .background-image-market { background-image: url("{{ asset('img/background/market_half.jpg') }}"); }
            .background-image-powerline { background-image: url("{{ asset('img/background/powerline_half.png') }}"); }
            .background-image-preston { background-image: url("{{ asset('img/background/preston_half.jpg') }}"); }
            .background-image-train { background-image: url("{{ asset('img/background/train_half.jpg') }}"); }
            .background-image-windturbines { background-image: url("{{ asset('img/background/wind-turbines_half.png') }}"); }
        }
        
        @media (max-width: 500px) and (max-height: 281px)
        {
            .background-image-coffee-shop { background-image: url("{{ asset('img/background/coffee-shop_quarter.png') }}"); }
            .background-image-docks { background-image: url("{{ asset('img/background/docks_quarter.jpg') }}"); }
            .background-image-plant { background-image: url("{{ asset('img/background/hydropower-plant_quarter.png') }}"); }
            .background-image-market { background-image: url("{{ asset('img/background/market_quarter.jpg') }}"); }
            .background-image-powerline { background-image: url("{{ asset('img/background/powerline_quarter.png') }}"); }
            .background-image-preston { background-image: url("{{ asset('img/background/preston_quarter.jpg') }}"); }
            .background-image-train { background-image: url("{{ asset('img/background/train_quarter.jpg') }}"); }
            .background-image-windturbines { background-image: url("{{ asset('img/background/wind-turbines_quarter.png') }}"); }
        }
        
        .client-project-section
        {
            padding: 20px 0px !important;
            min-height: 500px;
        }

        .client-project-column
        {
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            align-content: flex-start;
            justify-content: flex-start;
        }

        .client-project-column h2, h3
        {   
            text-align: left;
        }

        .client-project-column h2
        {
            font-size: 30px;
            margin-bottom: 1rem;
        }

        .client-project-column h3
        {
            font-weight: 400;
        }

        .fa-long-arrow-alt-right
        {
            vertical-align: middle;
            margin-left: 0.3em;
            font-size: 25px;
        }


        /* Read more toggle button CSS */

        input.read-more-state
        {
            display: none;
        }

        p.read-more-target
        {
            font-size: 0;
            max-height: 0;
            opacity: 0;
            transition: .25s ease;
        }

        input.read-more-state:checked ~  p.read-more-target 
        {
        font-size: inherit;
        max-height: 999em;
        opacity: 1;
        }
        input.read-more-state ~ label.read-more-trigger:before 
        {
            font-family: "Font Awesome 5 Free";
            content: 'Read more \f245';
            font-weight: 700;
        }
        input.read-more-state:checked ~ label.read-more-trigger:before 
        {
            content: 'Read less';
            font-weight: 700;
        }
        label.read-more-trigger 
        {
            cursor: pointer;
            display: inline-block;
        }

        @media (max-width: 767px)
        {
            .background-image
            {
                height: 30vw;
            }
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content mb-5">
@endsection

@section('main-content')
        <div class="container-lg row top-section-outer">
            <div class="col-12 col-md-6 no-padding">
                <div class="gradient-container container-no-gradient-sm d-flex">
                    <div class="align-item-bottom no-padding" style="font-style: italic">
                        <h1>Those who have trusted gigawaffle</h1>
                        <hr style="width: 150px">
                    </div>
                </div>
                <div class="text-container-40px">
                    <p><b>Here you'll find all of the clients we've previously worked with, what services we provided for them and what they thought of our work.</b></p>
                    <p>You can read more about a client by clicking "Learn More". If you like what you see, why not get in touch with us, and you never know, your business may appear here too.</p>
                    <div class="center-button"><a href="{{ route('services') }}#contactform"><button class="button-default">Get In Touch</button></a></div>
                </div>
            </div>
            <div class="col-6 d-none d-md-block">
                <img src={{ asset('img/approved-illustration.png')}}>
            </div>
        </div>
    </div>
    <div class="text-container-40px">
        <div class="client-project-section row no-padding">
            <div class="d-none d-lg-block col-lg-2"></div>
            <div class="col-12 col-md-6 col-lg-2 text-center">@include('partials.client-project-images.swapmyenergy')</div>
            <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
                <input type="checkbox" class="read-more-state" id="read-more-controller">
                <div class="temp-img-card-2"></div>
                <h2>Swap My Energy</h2>
                <h3>Marketing and Web Development Project</h3>
                <p>Swap my energy is an energy broker based in the bustling heart of Preston’s city centre. Swap My Energy believes in making the management of energy bills efficient, cheap and hassle free. As a company they work with both large businesses and independent shops. </p> 
                    
                <p class="read-more-target"> They also have a dedicated residential team that works with homeowners to find them their best deals. In practicality as a client they were just starting off so they needed a comprehensive boost in all their fields, this meant helping them not only boost their content but create entirely new streams of income via social media and online branding. </p>
                <label for="read-more-controller" class="read-more-trigger"></label>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '1' ]) }}">Learn more<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
        <div class="client-project-section row no-padding">
            <div class="col-12 col-md-8 col-lg-8 order-2 order-md-1 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Nulla sollicitudin, nisl eu tempus eleifend, nisi metus egestas velit, in pulvinar nibh nunc vel neque. Aliquam rhoncus auctor diam, id egestas lorem congue et. Morbi laoreet turpis sit amet quam congue, sit amet cursus diam fringilla. Mauris vulputate ut justo malesuada efficitur. Donec dictum non elit commodo aliquam. Vivamus tincidunt turpis et accumsan condimentum. Integer dapibus vitae massa et hendrerit. Vivamus justo elit, accumsan ac viverra id, consectetur in tellus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '2' ]) }}">Learn more</a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 order-1 order-md-2 background-image background-image-docks"></div>
        </div>
        <div class="client-project-section row">
            <div class="col-12 col-md-4 col-lg-4 background-image background-image-right background-image-plant"></div>
            <div class="col-12 col-md-8 col-lg-8 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum magna erat, ac sagittis sapien euismod in. Duis in eros non sem finibus consectetur non ac enim. Etiam rutrum eros vel tellus consequat, eget sollicitudin ante mattis. Nam ullamcorper varius vestibulum. Ut dui erat, vehicula nec tincidunt eu, maximus a diam. Phasellus nisl est, scelerisque vitae elit vitae, facilisis cursus sem. Cras fringilla, ligula eu dictum auctor, massa ipsum semper neque, et porttitor tellus risus vitae est. Suspendisse ante ex, auctor id posuere pulvinar, feugiat eu arcu. Morbi facilisis gravida augue, nec semper ex commodo ac. Curabitur sollicitudin orci at orci rhoncus, a rutrum ligula vehicula. Quisque in lectus id massa accumsan pellentesque nec at tellus. Ut feugiat, risus quis ornare congue, metus metus aliquam eros, at vulputate lectus dui in purus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '3' ]) }}">Learn more</a>
            </div>
        </div>
        <div class="client-project-section row no-padding">
            <div class="col-12 col-md-8 col-lg-8 order-2 order-md-1 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Nulla sollicitudin, nisl eu tempus eleifend, nisi metus egestas velit, in pulvinar nibh nunc vel neque. Aliquam rhoncus auctor diam, id egestas lorem congue et. Morbi laoreet turpis sit amet quam congue, sit amet cursus diam fringilla. Mauris vulputate ut justo malesuada efficitur. Donec dictum non elit commodo aliquam. Vivamus tincidunt turpis et accumsan condimentum. Integer dapibus vitae massa et hendrerit. Vivamus justo elit, accumsan ac viverra id, consectetur in tellus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '4' ]) }}">Learn more</a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 order-1 order-md-2 background-image background-image-market"></div>
        </div>
        <div class="client-project-section row">
            <div class="col-12 col-md-4 col-lg-4 background-image background-image-right background-image-powerline"></div>
            <div class="col-12 col-md-8 col-lg-8 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum magna erat, ac sagittis sapien euismod in. Duis in eros non sem finibus consectetur non ac enim. Etiam rutrum eros vel tellus consequat, eget sollicitudin ante mattis. Nam ullamcorper varius vestibulum. Ut dui erat, vehicula nec tincidunt eu, maximus a diam. Phasellus nisl est, scelerisque vitae elit vitae, facilisis cursus sem. Cras fringilla, ligula eu dictum auctor, massa ipsum semper neque, et porttitor tellus risus vitae est. Suspendisse ante ex, auctor id posuere pulvinar, feugiat eu arcu. Morbi facilisis gravida augue, nec semper ex commodo ac. Curabitur sollicitudin orci at orci rhoncus, a rutrum ligula vehicula. Quisque in lectus id massa accumsan pellentesque nec at tellus. Ut feugiat, risus quis ornare congue, metus metus aliquam eros, at vulputate lectus dui in purus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '5' ]) }}">Learn more</a>
            </div>
        </div>
        <div class="client-project-section row no-padding">
            <div class="col-12 col-md-8 col-lg-8 order-2 order-md-1 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Nulla sollicitudin, nisl eu tempus eleifend, nisi metus egestas velit, in pulvinar nibh nunc vel neque. Aliquam rhoncus auctor diam, id egestas lorem congue et. Morbi laoreet turpis sit amet quam congue, sit amet cursus diam fringilla. Mauris vulputate ut justo malesuada efficitur. Donec dictum non elit commodo aliquam. Vivamus tincidunt turpis et accumsan condimentum. Integer dapibus vitae massa et hendrerit. Vivamus justo elit, accumsan ac viverra id, consectetur in tellus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '6' ]) }}">Learn more</a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 order-1 order-md-2 background-image background-image-preston"></div>
        </div>
        <div class="client-project-section row">
            <div class="col-12 col-md-4 col-lg-4 background-image background-image-right background-image-train"></div>
            <div class="col-12 col-md-8 col-lg-8 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum magna erat, ac sagittis sapien euismod in. Duis in eros non sem finibus consectetur non ac enim. Etiam rutrum eros vel tellus consequat, eget sollicitudin ante mattis. Nam ullamcorper varius vestibulum. Ut dui erat, vehicula nec tincidunt eu, maximus a diam. Phasellus nisl est, scelerisque vitae elit vitae, facilisis cursus sem. Cras fringilla, ligula eu dictum auctor, massa ipsum semper neque, et porttitor tellus risus vitae est. Suspendisse ante ex, auctor id posuere pulvinar, feugiat eu arcu. Morbi facilisis gravida augue, nec semper ex commodo ac. Curabitur sollicitudin orci at orci rhoncus, a rutrum ligula vehicula. Quisque in lectus id massa accumsan pellentesque nec at tellus. Ut feugiat, risus quis ornare congue, metus metus aliquam eros, at vulputate lectus dui in purus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '7' ]) }}">Learn more</a>
            </div>
        </div>
        <div class="client-project-section row no-padding">
            <div class="col-12 col-md-8 col-lg-8 order-2 order-md-1 client-project-column" style="padding-top: 10px;">
                <div class="temp-img-card-2"></div>
                <h2>Project Title</h2>
                <h3>Project Type</h3>
                <p>Nulla sollicitudin, nisl eu tempus eleifend, nisi metus egestas velit, in pulvinar nibh nunc vel neque. Aliquam rhoncus auctor diam, id egestas lorem congue et. Morbi laoreet turpis sit amet quam congue, sit amet cursus diam fringilla. Mauris vulputate ut justo malesuada efficitur. Donec dictum non elit commodo aliquam. Vivamus tincidunt turpis et accumsan condimentum. Integer dapibus vitae massa et hendrerit. Vivamus justo elit, accumsan ac viverra id, consectetur in tellus.</p>
                <a class="pink-link" href="{{ route('clients.projects', [ 'projectId' => '8' ]) }}">Learn more</a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 order-1 order-md-2 background-image background-image-windturbines"></div>
        </div>
    </div>
@endsection
