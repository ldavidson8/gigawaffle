@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
        .background-image
        {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 30px;
        }
        .background-image-right { background-position: right; }

        .client-project-section
        {
            margin: 20px 0px !important;
        }

        .client-project-column
        {
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            align-content: flex-start;
            justify-content: flex-start;
            font-size: 18px;
        }

        .client-project-column h2, h3
        {
            text-align: left;
        }

        .client-project-column h2
        {
            font-size: 30px !important;
            margin-bottom: 1rem;
        }

        .client-project-column h3
        {
            font-weight: 400;
        }

        .fa-long-arrow-alt-right
        {
            vertical-align: middle;
            margin-left: 0.3em;
            font-size: 25px;
        }

        @media (max-width: 767px)
        {
            .background-image
            {
                height: 30vw;
            }
        }

        .table-details > thead > tr > th,
        .table-details > tbody > tr > td
        {
            padding: 7px;
            border: 1px solid black;
        }
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Client Project Services</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel') }}"><button class="btn btn-success">Back</button></a></p>

            <p><a href="{{ route('control-panel.client-project-services.create') }}"><button class="btn btn-info">Create New</button></a></p>
            <table class="table-details">
                <thead>
                    <tr>
                        <th>Content</th>
                        <th>Sort Order</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($services as $service)
                    <tbody>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td style="vertical-align: middle;"><img src="{{ asset($service -> ImgSrc) }}" style="max-width: 30px; max-height: 30px; margin-right: 7px;" /></td>
                                        <td style="vertical-align: middle;">{{ $service -> Name }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td style="text-align: center;">{{ $service -> SortIndex }}</td>
                            <td><a href="{{ route('control-panel.client-project-services.edit') . "/" . $service -> ID }}" class="btn btn-info">Edit</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
