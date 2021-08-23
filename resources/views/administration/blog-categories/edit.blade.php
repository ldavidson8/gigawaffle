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

            <p><a href="{{ route('control-panel.blog-category') }}"><button class="btn btn-success">Back</button></a></p>

            <form method="POST" action="{{ route('control-panel.blog-category.edit') }}" enctype="multipart/form-data">
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
                <input type="hidden" name="id" value="{{ $blog_category -> CategoryID }}" />
                <div class="form-group">
                    <label for="name">Category Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $blog_category -> Name) }}" required="required" />
                </div>
                <div style="text-align: center;">
                    <p><button class="button-default" style="width: 150px; max-width: 100%;">Submit</button></p>
                </div>
            </form>
        </div>
@endsection

@section('after-footer')
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
