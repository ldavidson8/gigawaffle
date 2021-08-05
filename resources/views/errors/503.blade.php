<?php
    $page_title = 'Service Unavailable';
?>
@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column" style="background-color: #000733">
@endsection

@section('main-content')
        <hr/>
        <div class="flex-grow-1 row flex-grow-1 no-padding">
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block" style="background-image: url('{{ asset('img/waves/wavesDesktopBottom.png') }}'); background-repeat: no-repeat; background-position: left bottom; background-size: full; width: 100%"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-12" style="background: #f0f0f0; position: relative;"> 
                <div class="error-images"style="background-image: url('{{ asset('img/error pages/503.png') }}'); position: absolute; width: 100%; height: 100%; background-size: 620px; background-repeat: no-repeat; background-position: center; filter: invert(50%); opacity: 0.3;">
                </div>
                <table class="table-center-contents">
                    <tr>
                        <td>
                            <h1 id="title-spacing" style="position: relative; font-weight: bold; font-size: 40px; text-align: center;"><span id="number-spacing" style="font-size: 130px;">503</span><br />This Service Is Unavailable</h1>

                            <br /><br />

                            <div style="display: flex; justify-content: center;">
                                <p class="gradient-container gradient-error-pages" style=" padding: 10px 10px; position: relative; text-align: center; font-size: 18px; letter-spacing: 1px; height: auto; width: 470px;">The server is temporarily unable to <br /> handle your request, Please try again later</p> 
                            </div>

                            <br /><br />

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <p><a href="{{ url() -> previous()}}" onclick="history.back()"><button class="button-alternate" style="width: 100%; font-size: 23px; position: relative;">Go Back</button></a></p>
                            </div>

                            <br /><br />

                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block" style="background-image: url('{{ asset('img/waves/wavesDesktopBottom.png') }}'); background-repeat: no-repeat; background-position: bottom; background-size: full; background-origin: padding-box; padding: 50px; opacity:; width: 100%;"></div>
        </div>
    </div>
@endsection

@section('after-footer')
@endsection