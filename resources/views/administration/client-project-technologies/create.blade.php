@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer" style="margin-top: 0;">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Create a new Technology</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel.client-project-technologies') }}"><button class="btn btn-success">Back</button></a></p>

            <form method="POST" action="{{ route('control-panel.client-project-technologies.create') }}" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required="required" />
                </div>
                <div class="form-group">
                    <label for="sort_index">Sort Index <span class="text-danger">*</span></label>
                    <input type="number" step="1" class="form-control" name="sort_index" id="sort_index" value="{{ old('sort_index') }}" required="required" />
                </div>
                <div style="text-align: center;">
                    <p><button class="button-default" style="width: 150px; max-width: 100%;">Submit</button></p>
                </div>
            </form>
        </div>
    </div>
@endsection
