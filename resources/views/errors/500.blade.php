<?php
    if (!isset($page_title)) $page_title = 'Server Error';
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
        <div class="row flex-grow-1 no-padding background-image" style="background-image: url('{{ asset('img/waves/wavesDesktopBottom.png') }}');">
            <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                <table class=" no-spacing table-center-contents">
                    <tr>
                        <td>
                            <h1 class="addhttp">
                                <?= 5?>@include('errors.partials.random_doughnut')@include('errors.partials.random_doughnut')
                            </h1>
                            <h1 id="title-spacing">Something Went Wrong</h1>

                            <br /><br />

                            <div class="error-text">
                                <p class="gradient-container gradient-error-pages">The server encountered an internal error and was unable to complete your request</p>
                            </div>

                            <br /><br />

                            <div class="button-container">
                                <p><a href="{{ url() -> previous(route('home'))}}" onclick="history.back()"><button class="button-alternate">Go Back</button></a></p>
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
