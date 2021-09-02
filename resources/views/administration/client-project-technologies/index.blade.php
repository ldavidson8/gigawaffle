@extends('layouts.master')

@section('stylesheets')
    <style type="text/css">
        .table-details
        {
            background-image: linear-gradient(to right, #DF4985 , #7A98EE);
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
        <div class="container-lg top-section-outer" style="margin-top: 0;">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Client Project Technologies</h1>
                <hr style="width: 150px" />
            </div>
            <br />

            <p><a href="{{ route('control-panel') }}"><button class="btn btn-success">Back</button></a></p>

            <p><a href="{{ route('control-panel.client-project-technologies.create') }}"><button class="btn btn-info">Create New</button></a></p>
            @if (isset($technologies) && count($technologies) > 0)
                <table class="table-details">
                    <thead>
                        <tr>
                            <th>Content</th>
                            <th>Sort Order</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($technologies as $technology)
                        <tbody>
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td style="vertical-align: middle;"><img src="{{ asset($technology -> ImgSrc) }}" style="max-width: 30px; max-height: 30px; margin-right: 7px;" /></td>
                                            <td style="vertical-align: middle;">{{ $technology -> Name }}</td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="text-align: center;">{{ $technology -> SortIndex }}</td>
                                <td><a href="{{ route('control-panel.client-project-technologies.edit') . "/" . $technology -> ID }}" class="btn btn-info">Edit</a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection
