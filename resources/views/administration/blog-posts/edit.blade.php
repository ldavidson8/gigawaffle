@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Edit an existing Blog Category</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel.blog-post') }}"><button class="btn btn-success">Back</button></a></p>

            <form method="POST" action="{{ route('control-panel.blog-post.edit') }}" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br /><br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <input type="hidden" name="id" value="{{ $blog_post -> ID }}" />
                <div class="form-group">
                    <label for="category_id">Category <span class="text-danger">*</span></label>
                    <select class="form-control" type="text" id="category_id" name="category_id" data-value="{{ old('category_id', $blog_post -> CategoryID) }}" required="required">
                        @foreach ($blog_categories as $row)
                            <option value="{{ $row -> CategoryID }}">{{ $row -> Name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="page_title">Page Title <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" id="page_title" name="page_title" value="{{ old('page_title', $blog_post -> PageTitle) }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="heading">Heading <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" id="heading" name="heading" value="{{ old('heading', $blog_post -> Heading) }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" />
                </div>
                <div class="form-group">
                    <label for="full_content">Full Content <span class="text-danger">*</span></label>
                    <textarea id="full_content" name="full_content" rows="20" style="width: 100%;">{{ old('full_content', $blog_post -> Content) }}</textarea>
                </div>
                <div style="text-align: center;">
                    <p><button class="button-default" style="width: 150px; max-width: 100%;">Submit</button></p>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var inputCategoryID = $("#category_id");

        try
        {
            var categoryID = inputCategoryID.attr("data-value");
            inputCategoryID.find("[value=" + categoryID + "]").attr("selected", "selected");
        }
        catch (ex) { }
    </script>
@endsection
