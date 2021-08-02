@extends('layouts.master')

@section('stylesheets')
    <style>
        .filter-button
        {
            background-color: var(--color-navyblue);
            color: var(--color-white);
            font-weight: 700;
            font-size: 20px;
            border:none;
            border-radius: 10px;
            padding: 15px;
        }

        .filter-button-icon
        {
            margin-left: 10px;
            font-size: 1.5em;
            vertical-align: middle;
        }

        input[name=filter-services]:checked + label
        {
            background-color: var(--color-white);
            border: 2px solid var(--color-navyblue);
            color: var(--color-navyblue)
        }
        .radio-hidden
        {
            opacity: 0;
            width: 0;
        }

        .selection-wrapper 
        {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .selection-wrapper img
        {
            height: 100px;
            width: 80px;
        }

        @supports (display: grid) 
        {
            .selection-wrapper 
            {
                display: grid;
                justify-items: stretch;
                grid-auto-rows: 1fr;
                grid-template-columns: repeat(5, 1fr);
                grid-gap: 10px;
            }
        }

        .selection-button
        {
            background-color: var(--color-white);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border-radius: 10px;
            font-weight: bold;
            padding: 10px;
        }

        .selection-icon
        {
            margin-right: auto;
        }
        .selection-wrapper [type=checkbox]:checked + label 
        {
        color: var(--color-pink);
        background-color: var(--color-navyblue);
        font-style: normal;
        }
        .selection-wrapper [type=checkbox]:checked + label>svg
        {
            fill: var(--color-pink);
        } 
    </style>
@endsection

@section('before-header')
@endsection

@section('main-content')
<div class="full-size-80 container-fluid" style="padding: 30px 0;">
            <div class="d-flex row col-12">
                    <input type="radio" id="all-services" name="filter-services" class="btn-check radio-hidden" checked>
                    <label class="filter-button" for="all-services">All Services<i class="fa fa-folder-open filter-button-icon" aria-hidden="true"></i></label>
                    <input type="radio" id="design-dev" name="filter-services" class="btn-check radio-hidden">
                    <label class="filter-button" for="design-dev">Design & Dev<img class="filter-button-icon" src="{{ asset('img/service-selection-icons/paint-palette.svg') }}" height="30"></label>
                    <input type="radio" id="marketing" name="filter-services" class="btn-check radio-hidden">
                    <label class="filter-button" for="marketing">Marketing<img class="filter-button-icon" src="{{ asset('img/service-selection-icons/megaphone.svg') }}" height="30"></label>
                    <input type="radio" id="media" name="filter-services" class="btn-check radio-hidden">
                    <label class="filter-button" for="media">Media<img class="filter-button-icon" src="{{ asset('img/service-selection-icons/video-player.svg') }}" height="30"></label>
            </div>
            <div class="selection-wrapper">
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/brand.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="worldwideweb" value="brand-design" class="radio-hidden">
                <label for="worldwideweb" class="selection-button"><img src="{{ asset('img/service-selection-icons/world-wide-web.svg') }}"> Web Dev </label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/computer.svg') }}"> Brand Design</label>
                </div>
                <div>
                    <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                    <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/design.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/packaging.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/id-card.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/search.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/copywriting.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/digital-marketing.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/content-marketing.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/affiliate-marketing.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/email.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/video-content.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/audio-content.svg') }}"> Brand Design</label>
                </div>
                <div>
                <input type="checkbox" id="brand-design" value="brand-design" class="radio-hidden">
                <label for="brand-design" class="selection-button"><img src="{{ asset('img/service-selection-icons/social-media-content.svg') }}"> Brand Design</label>
                </div>
            </div>
            
            </div>
</div>
<div class="container no-padding" style="width: 576px; max-width: 100%;">
    
    <div class="pink-box-round pink-box-merge-bottom">
        <div class="pink-box-white-striped-border pink-box-border-merge-bottom">
            <form method="post" action="{{ route('post.contact-us') }}">
                @csrf
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
                <div class="form-group">
                    <label for="fullname">Full Name *</label>
                    <input class="form-control" type="text" name="fullname" value="{{ old('fullname') }}" required="required" />
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number (optional)</label>
                    <input class="form-control" type="text" name="phone" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="message">How can we help? *</label>
                    <textarea name="message" rows="4" required style="width: 100%;">{{ old('message') }}</textarea>
                </div>
                <div class="from-group">
                    <p>* required</p>
                </div>
                <div style="text-align: center;">
                    <button class="button-default" style="width: 150px; max-width: 100%;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
