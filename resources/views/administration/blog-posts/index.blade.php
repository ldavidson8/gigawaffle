@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/blog-listing.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-xl top-section-outer" style="margin-top: 0;">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Blog Posts</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel') }}"><button class="btn btn-success">Back</button></a></p>

            <p><a href="{{ route('control-panel.blog-post.create') }}"><button class="btn btn-info">Create New</button></a></p>
            <div class="text-container-40px" style="text-align: center;">
                @foreach ($blog_posts as $blog_post)
                <a href="{{ route('control-panel.blog-post.edit') . '/' . $blog_post -> ID }}" class="blog-post-section no-padding background-image" style="background-image: url('{{ asset($blog_post -> ImageSource) }}');">
                    <p class="blog-post-heading">{{ $blog_post -> Heading }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
