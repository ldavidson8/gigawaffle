<?php
    $page_title = 'Page Expired';
?>
@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex h-100 flex-column" style="background: #000733">
@endsection

@section('main-content')
        <hr/>
        <div class="row flex-grow-1 no-padding">
        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-md-block"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 "style="background: #000733; background-image: url('{{ asset('img/error pages/419.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 350px;">
                <table class=" no-spacing table-center-contents">
                    <tr>
                        <td>
                            <h1 id="title-spacing" style="padding-bottom: 4cm; font-weight: bold; font-size: 40px; text-align: center;"><span id="number-spacing" style="font-size: 140px;">419</span><br />Page Expired</h1>

                            <br /><br />

                            <div style="display: flex; justify-content: center;">
                                <p class="gradient-container gradient-error-pages" style="padding: 10px 10px; text-align: center; font-size: 18px; letter-spacing: 1px; height: auto; width: 500px;">Your session has expired<br />Please go back and try again</p> 
                            </div>

                            <br /><br />

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <p><a href="{{ url() -> previous()}}" onclick="history.back()"><button class="button-alternate" style="width: 100%; font-size: 23px;">Go Back</button></a></p>
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
