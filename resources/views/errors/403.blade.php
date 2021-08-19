<?php
    $page_title = 'Forbidden';
?>
@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column" style="background: #000733;">
@endsection

@section('main-content')
        <hr/>
        <div class="row flex-grow-1 no-padding background-image" style="background-image: url('{{ asset('img/waves/wavesDesktopBottom.png') }}');">
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-12" style="position: relative;">
                <div class="error-images" style="background-image: url('{{ asset('img/error pages/403.png') }}'); position: absolute; width: 100%; height: 100%; background-size: 700px; background-repeat: no-repeat; background-position: center; filter: grayscale(100%); filter: contrast(0%); opacity: 0.2; transform: scaleX(-1);">
                </div>
                <table class=" no-spacing table-center-contents">
                    <tr>
                        <td>
                            <h1 id="title-spacing" style="position: relative; padding-top:; font-weight: bold; font-size: 40px; text-align: center;">
                                <span id="number-spacing" style="font-size: 130px;">
                                    4 <img src="{{ asset('img/error pages/character-419.png') }}" style="width: auto; height: 0.8em; z-index: -1; margin-left: -0.2em; margin-right: -0.2em; margin-bottom: 0.2em;" /> 3
                                </span>
                                <br />Forbidden
                            </h1>

                            <br /><br />

                            <div style="padding-top:; display: flex; justify-content: center;">
                                <p class="gradient-container gradient-error-pages" style="padding: 10px 10px; position: relative; text-align: center; font-size: 18px; letter-spacing: 1px; height: auto; width: 500px;">You do not have permission to continue</p>
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
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
        </div>
    </div>
@endsection

@section('after-footer')
@endsection
