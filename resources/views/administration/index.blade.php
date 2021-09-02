@extends('layouts.master')

@section('stylesheets')
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer" style="margin-top: 0;">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Control Panel</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel.client-projects') }}"><button class="btn btn-info">Client Projects</button></a></p>
            <p><a href="{{ route('control-panel.client-project-services') }}"><button class="btn btn-info">Client Project Services</button></a></p>
            <p><a href="{{ route('control-panel.client-project-technologies') }}"><button class="btn btn-info">Client Project Technologies</button></a></p>
            <p><a href="{{ route('control-panel.blog-post') }}"><button class="btn btn-info">Blog Posts</button></a></p>
            <p><a href="{{ route('control-panel.blog-category') }}"><button class="btn btn-info">Blog Categorys</button></a></p>
        </div>
@endsection

@section('after-footer')
    </div>
@endsection
