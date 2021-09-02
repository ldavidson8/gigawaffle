@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-xl top-section-outer" style="margin-top: 0;">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Blog Categories</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel') }}"><button class="btn btn-success">Back</button></a></p>

            <p><a href="{{ route('control-panel.blog-category.create') }}"><button class="btn btn-info">Create New</button></a></p>

            @foreach ($blog_categories as $blog_category)
                <p>
                    <a href="{{ route('control-panel.blog-category.edit') . "/" . $blog_category -> CategoryID }}" class="btn btn-info">Edit</a>
                    {{ $blog_category -> Name }}
                </p>
            @endforeach
        </div>
@endsection

@section('after-footer')
    </div>
@endsection
