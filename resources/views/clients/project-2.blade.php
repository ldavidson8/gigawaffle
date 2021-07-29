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
                <div class="gradient-container container-no-gradient-sm d-flex center-content">
                    <div class="align-item-bottom" style="padding: 0 20px; font-style: italic">
                        <h1>Project Title</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-6 d-none d-sm-flex center-content">
                <img src="{{ asset('img/background/docks_full.jpg') }}" alt="" />
            </div>
        </div>
    </div>
    <div class="container-lg" style="font-size: 20px;">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum magna erat, ac sagittis sapien euismod in. Duis in eros non sem finibus consectetur non ac enim. Etiam rutrum eros vel tellus consequat, eget sollicitudin ante mattis. Nam ullamcorper varius vestibulum. Ut dui erat, vehicula nec tincidunt eu, maximus a diam. Phasellus nisl est, scelerisque vitae elit vitae, facilisis cursus sem. Cras fringilla, ligula eu dictum auctor, massa ipsum semper neque, et porttitor tellus risus vitae est. Suspendisse ante ex, auctor id posuere pulvinar, feugiat eu arcu. Morbi facilisis gravida augue, nec semper ex commodo ac. Curabitur sollicitudin orci at orci rhoncus, a rutrum ligula vehicula. Quisque in lectus id massa accumsan pellentesque nec at tellus. Ut feugiat, risus quis ornare congue, metus metus aliquam eros, at vulputate lectus dui in purus.</p>
        <p>Nulla sollicitudin, nisl eu tempus eleifend, nisi metus egestas velit, in pulvinar nibh nunc vel neque. Aliquam rhoncus auctor diam, id egestas lorem congue et. Morbi laoreet turpis sit amet quam congue, sit amet cursus diam fringilla. Mauris vulputate ut justo malesuada efficitur. Donec dictum non elit commodo aliquam. Vivamus tincidunt turpis et accumsan condimentum. Integer dapibus vitae massa et hendrerit. Vivamus justo elit, accumsan ac viverra id, consectetur in tellus.</p>
        <a href="{{ url() -> previous(route('clients')) }}"><button class="button-default">Back</button></a>
        <br /><br />
    </div>
@endsection
