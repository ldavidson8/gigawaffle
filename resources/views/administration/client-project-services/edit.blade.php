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
                <h1>Edit an existing Service</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel.client-project-services') }}"><button class="btn btn-success">Back</button></a></p>

            <form method="POST" action="{{ route('control-panel.client-project-services.edit') }}" enctype="multipart/form-data">
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
                <input type="hidden" name="id" value="{{ $service -> ID }}" />
                <div class="form-group">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="{{ old('name', $service -> Name) }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" />
                </div>
                <div class="form-group">
                    <label for="sort_index">Sort Index <span class="text-danger">*</span></label>
                    <input type="number" step="1" class="form-control" name="sort_index" id="sort_index" value="{{ old('sort_index', $service -> SortIndex) }}" required="required" />
                </div>
                <div style="text-align: center;">
                    <p><button class="button-default" style="width: 150px; max-width: 100%;">Submit</button></p>
                </div>
            </form>
        </div>
    </div>
@endsection
