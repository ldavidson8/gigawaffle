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
    </style>
@endsection

@section('before-header')
    <div class="full-size container-fluid d-flex flex-column center-content">
@endsection

@section('main-content')
        <div class="container-lg top-section-outer">
            <div class="gradient-container container-no-gradient-sm">
                <h1>Client Projects</h1>
                <hr style="width: 150px" />
                <br />

                <p><a href="{{ route('control-panel.client-projects.create') }}">Create New</a></p>
                <div class="text-container-40px container-xl">
                    @for ($i = 0; $i < count($client_projects); $i++)
                        <?php
                            $client_project = $client_projects[$i];
                            $project_image_order_classes = "";
                            $project_text_order_classes = "";

                            if ($i % 2 == 1) // if the index is odd
                            {
                                $project_image_order_classes = "order-1 order-md-2";
                                $project_text_order_classes = "order-2 order-md-1";
                            }
                            $short_content = explode("\r\n", $client_project -> ShortContent)
                        ?>
                        <div class="client-project-section row no-padding">
                            <a href="{{ route('control-panel.client-projects.edit') . '/' . $client_project -> ID }}" class="col-12 col-md-4 col-lg-4 {{ $project_image_order_classes }} background-image" style="background-image: url('{{ asset($client_project -> ImageSource) }}');"></a>
                            <div class="col-12 col-md-8 col-xl-8 {{ $project_text_order_classes }} client-project-column" style="padding-top: 10px;">
                                {{-- @if (count($short_content) > 1) <input type="checkbox" class="read-more-state" id="read-more-controller"> @endif --}}
                                <div class="temp-img-card-2"></div>
                                <h2>{{ $client_project -> Heading }}</h2>
                                <h3>{{ $client_project -> SubHeading }}</h3>
                                @for ($j = 0; $j < count($short_content); $j++)
                                    <p>{{ $short_content[$j] }}</p>
                                @endfor
                                {{-- @if (count($short_content) > 1) <label for="read-more-controller" class="read-more-trigger"></label> @endif --}}
                                <a class="pink-link" href="{{ route('control-panel.client-projects.edit') . '/' . $client_project -> ID }}">Edit<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
