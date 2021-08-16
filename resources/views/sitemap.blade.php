@extends('layouts.master')

@section('stylesheets')
    <style>
        ul{
            list-style: none;
        }
        p{
            font-weight: normal;
            text-align: center;
        }
        .line-height{
            line-height: 2.5;
        }
        .anchor-default:link, .anchor-default:visited{
            color: #DF4985;
            outline: none;
        }
        .anchor-default:hover, .anchor-default:active{
            color: #000733;
            outline: none;
            text-decoration:;
        }
        h1{
            text-decoration: underline;
            color: #000733;
            text-align: center;
            font-size: 35px;
            padding-top: 40px;
        }
        .gradient-container{
            background-image: linear-gradient(to right, #DF4985 , #7A98EE);
            border-radius: 20px;
        }
        .font-weight-bold{
            color: #000733;
            padding: 2.5mm;
            margin-right: 2cm;
            border-radius: 25px; 
            text-align: center;
        }

        @media (max-width: 370px)
        {
            .section-title
            {
                font-size: 9vmin;
            }
        }
        @media (max-width: 334px)
        {
            .font-weight-bold
            {
                margin-right: 5px;
            }
        }
    </style>
@endsection

@section('main-content')
<hr />
    <main class="col-md-12">
        <div class="container">
            <div class="title">
                <br />
                <h1 class="section-title"> Gigawaffle.co.uk Sitemap</h1>
                <br />
                <div>
                    <p>Welcome to our Sitemap page. Below you can find a list of all the visitable pages on our website.</p>
                    <br />
                </div>
            </div>   
            <div class="row">
                <div class="col-lg-6">
                    <p class="font-weight-bold gradient-container">Gigawaffle:</p>
                    <ul class="line-height">
                        <li>
                        <br />
                            <p><a class="anchor-default" href="{{ route('home') }}">Home</a></p>
                            <p><a class="anchor-default" href="{{ route('about') }}">About Us</a></p>
                            <p><a class="anchor-default" href="{{ route('clients') }}">Clients</a></p>
                            <p><a class="anchor-default" href="{{ route('services') }}">Our Services</a></p>
                            <p><a class="anchor-default" href="{{ route('service-selection') }}">Service Selection</a></p>
                            <p><a class="anchor-default" href="{{ route('about') }}#contactform">Contact Us</a></p>
                            <p><a class="anchor-default" href="{{ route('privacy-policy') }}">Privacy Policy</a></p>
                            <p><a class="anchor-default" href="{{ route('terms-and-conditions') }}">Terms and Conditions</a></p>
                            
                            <p><a class="anchor-default" href="http://gigawaffle.co.uk/blog/">Blog</a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="font-weight-bold gradient-container">Clients:</p>
                    <ul class="line-height">
                        <li>
                        <br />
                        <p><a class="anchor-default" href="{{ route('clients.projects', [ 'projectId' => '1' ]) }}">Swap My Energy</a></p>  
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
    </main>
    <br /><br /><br />    
@endsection()