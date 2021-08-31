@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/administration/client-projects.css') }}" />
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Create a new Client Project</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel.client-projects') }}"><button class="btn btn-success">Back</button></a></p>

            <form method="POST" action="{{ route('control-panel.client-projects.create') }}" enctype="multipart/form-data">
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
                    <label for="page_title">Page Title <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="page_title" value="{{ old('page_title') }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="heading">Heading <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="heading" value="{{ old('heading') }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="sub_heading">Sub-Heading <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="sub_heading" value="{{ old('sub_heading') }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required="required" />
                </div>
                <div class="form-group">
                    <br />
                    <p><label>Services We Provided</label></p>
                    @foreach ($services as $service)
                        <?php $service_name_for_ids = str_replace(" ", "_", $service -> Name); ?>
                        <input type="checkbox" name="services[]" id="services_{{ $service_name_for_ids }}" class="services-checkbox" value="{{ $service -> ID }}" />
                        <label for="services_{{ $service_name_for_ids }}">
                            <div style="width: 30px; height: 30px; margin-right: 5px; vertical-align: middle;" class="d-inline-flex center-content">
                                <img src="{{ asset($service -> ImgSrc) }}" style="max-width: 100%; max-height: 100%;" />
                            </div>
                            {{ $service -> Name }}
                        </label>
                    @endforeach
                    <br />
                    <br />
                </div>
                <div class="form-group">
                    <label for="short_content">Short Content (for page of showing multiple projects) <span class="text-danger">*</span></label>
                    <textarea name="short_content" rows="10" style="width: 100%;">{{ old('short_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="full_content">Full Content (for the page displaying only this project) <span class="text-danger">*</span></label>
                    <textarea name="full_content" rows="20" style="width: 100%;">{{ old('full_content') }}</textarea>
                </div>
                <div style="text-align: center;">
                    <p><button class="button-default" style="width: 150px; max-width: 100%;">Submit</button></p>
                </div>
            </form>
        </div>
    </div>
@endsection
