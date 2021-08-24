<?php
    $page_title = 'Unauthorized';
?>
@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column" style="background-image: url('/img/background/background-grid.png');">
@endsection

@section('main-content')
        <hr/>
        <div class="row flex-grow-1 no-padding">
        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 error-images-2"[[style="background-image: url('{{ asset('img/error pages/401.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 350px;">
                <table class="table-center-contents">
                    <tr>
                        <td>
                            <h1 id="title-spacing"  style="padding-top:;">
                                <span class="addhttp" id="number-spacing">
                                    4 <!--<img src="{{ asset('img/error pages/Donut.png') }}" style="width: auto; height: 0.8em; z-index: -1; margin-left: -0.2em; margin-right: -0.2em; margin-bottom: 0.2em;" />--> <img rel="preload" src="{{ asset('img/error pages/Waffle-1-500kB.png') }}" style="width: auto; height: 1em; z-index: -1; margin-left: -0.3em; margin-right: -0.3em; margin-bottom: 0.2em;" /> 1
                                </span>
                                <br />Access Denied
                            </h1>

                            <br /><br /> 

                            <div class="error-text" style="padding-top:;">
                                <p class="gradient-container gradient-error-pages">Your authorization failed<br />Please fill in the correct credentials and try again</p>  
                            </div>

                            <br /><br />
            
                            <div class="button-container">
                                <p><a href="{{ url() -> previous()}}" onclick="history.back()"><button class="button-alternate">Go Back</button></a></p>
                            </div>

                            <br /><br />

                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
        </div>
    </div>
@endsection

@section('after-footer')
@endsection