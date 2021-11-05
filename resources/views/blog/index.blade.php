@extends('layouts.master')

@section('title')
    Learn Marketing with The Gigawaffle blog
@stop

@section('description')
    Gigawaffle’s blog is your first stop to learn all about the world of marketing. 
@stop

@section('keywords', 'Blog, Marketing Blog, affiliate marketing blog, online marketing 
blog, best marketing blogs')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/blog-listing.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-xl top-section-outer">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Blog Posts</h1>
                <hr style="width: 150px" />
            </div>
            <br />
            <div class="text-container-40px" style="text-align: center;">
                @foreach ($blog_posts as $blog_post)
                <a href="{{ route('blog.blog-post', [ 'blogId' => $blog_post -> ID ]) }}" class="blog-post-section no-padding background-image" style="background-image: url('{{ asset($blog_post -> ImageSource) }}');">
                    <p class="blog-post-heading">{{ $blog_post -> Heading }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
