@extends('layouts.master')

@section('stylesheets')
    <style>
        .filter-button
        {
            background-color: var(--color-navyblue);
            color: var(--color-white);
            font-weight: 700;
            font-size: 24px;
            border:none;
            border-radius: 10px;
            padding: 5px 15px;
            width: 90vw;
        }
        .long-button
        {
            width: 200px;
            max-width: 100%;
            border-radius: 17px;
            padding: 5px 10px;
            border: 2px solid var(--color-navyblue);
            background-color: transparent;
            font-weight: 700;
            font-size: 20px;
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

        input[name=filter-services]:checked + * *
        {
            fill: var(--color-navyblue)
        }

        .radio-hidden
        {
            display: none;
        }

        .selection-items 
        {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .selection-button
        {
            background-color: var(--color-white);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            font-weight: bold;
            border-radius: 10px;
            padding: 0 5px;
            display: flex;
            flex-direction: column;
            width: 150px;
            margin: 5px;
            align-items: center;
        }
        .selection-items [type=checkbox]:checked + label 
        {
        color: var(--color-violet);
        background-color: var(--color-navyblue);
        font-style: normal;
        }
        .selection-items [type=checkbox]:checked + * *
        {
            fill: var(--color-violet);
        } 

        .service-svg-1
        {
            fill: var(--color-navyblue);
        }

        input#Design:checked ~ .selection-items > label:not([filter=design])
        {
            display: none;
        }

        input#Marketing:checked ~ .selection-items > label:not([filter=marketing])
        {
            display: none;
        }

        input#Media:checked ~ .selection-items > label:not([filter=social-content])
        {
            display: none;
        }


        @media (min-width: 768px)
        {
            .selection-items 
        {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .selection-button
        {
            background-color: var(--color-white);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            font-weight: bold;
            border-radius: 10px;
            padding: 0 5px;
            display: flex;
            flex-direction: column;
            width: 200px;
            margin: 5px;
        }

        .filter-button
        {
            margin-left: 30px;
            width: auto;
        }
  
        }

        @media (min-width: 992px)
        {

            .selection-items
            {
                justify-content: start;
                margin-bottom: 2em;
            }
            .selection-button
        {
            background-color: var(--color-white);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            font-weight: bold;
            border-radius: 10px;
            padding: 0 5px;
            display: flex;
            flex-direction: row;
            justify-content:space-evenly;
            width: 350px;
            margin: 5px;
        }
        }

    </style>
@endsection

@section('before-header')
@endsection

@section('main-content')
<div class="container-fluid text-center text-md-left" style="padding: 30px 0 0 0;">
        <input type="radio" id="All" name="filter-services" class="btn-check radio-hidden" checked />
        <label class="filter-button" for="All">All Services<i class="fa fa-folder-open filter-button-icon" aria-hidden="true"></i></label>
        <input type="radio" id="Design" name="filter-services" class="btn-check radio-hidden" />
        <label class="filter-button" for="Design">Design & Dev
            <svg id="Group_78" data-name="Group 78" xmlns="http://www.w3.org/2000/svg" class="marketing" height="30" viewBox="0 0 43.671 43.67">
            <g id="paint-palette">
                <path id="Path_139" data-name="Path 139" d="M12.879,366.122a5.118,5.118,0,1,0-10.235,0v2.559A2.71,2.71,0,0,1,0,371.324v2.559H5.2A7.758,7.758,0,0,0,12.879,366.122Z" transform="translate(0 -330.213)" fill="#fff"/>
                <path id="Path_140" data-name="Path 140" d="M240.887,125.132a1.279,1.279,0,1,0,1.567.9A1.278,1.278,0,0,0,240.887,125.132Z" transform="translate(-219.473 -114.419)" fill="#fff"/>
                <path id="Path_141" data-name="Path 141" d="M165.61,212.432a1.279,1.279,0,0,0,.663-2.471h0a.939.939,0,0,0-.718.06q.022,1.157.03,2.4C165.593,212.423,165.6,212.43,165.61,212.432Z" transform="translate(-151.433 -192.01)" fill="#fff"/>
                <path id="Path_142" data-name="Path 142" d="M304.568,357.859a1.279,1.279,0,1,0-.9,1.568,1.279,1.279,0,0,0,.9-1.568Z" transform="translate(-276.29 -326.469)" fill="#fff"/>
                <path id="Path_143" data-name="Path 143" d="M358.04,158.329a1.28,1.28,0,1,0-1.809,0A1.283,1.283,0,0,0,358.04,158.329Z" transform="translate(-325.504 -142.826)" fill="#fff"/>
                <path id="Path_144" data-name="Path 144" d="M167.453,30.093a21.321,21.321,0,0,0-11.136,3.922,82.746,82.746,0,0,1,.718,8.878,3.838,3.838,0,1,1,.463,7.649c-.123,0-.245-.037-.368-.049-.015,2.046-.062,4.071-.15,6a6.745,6.745,0,0,1,3,2.209,6.182,6.182,0,0,1,.851,4.774,3.852,3.852,0,0,0,2.925,4.7,19.255,19.255,0,0,0,22.9-18.985C186.565,38.26,177.1,29.73,167.453,30.093ZM171.9,39.4a3.839,3.839,0,1,1,5.43,5.429h0a3.84,3.84,0,0,1-5.43-5.43Zm-10.877,1.057a3.838,3.838,0,1,1,4.7,2.715A3.835,3.835,0,0,1,161.022,40.457Zm10,22.488a3.838,3.838,0,1,1,2.714-4.7A3.842,3.842,0,0,1,171.02,62.945Zm9.951-9.952a3.838,3.838,0,1,1-2.714-4.7A3.835,3.835,0,0,1,180.972,52.993Z" transform="translate(-142.984 -27.516)" fill="#fff"/>
                <path id="Path_145" data-name="Path 145" d="M388.518,272.1a1.279,1.279,0,1,0,.9,1.567A1.279,1.279,0,0,0,388.518,272.1Z" transform="translate(-353.907 -248.851)" fill="#fff"/>
                <path id="Path_146" data-name="Path 146" d="M53.661,23.118c0-.428.015-.849.015-1.279C53.676,11.917,53.01,0,49.838,0S46,11.917,46,21.839c0,.43.012.851.015,1.279Z" transform="translate(-42.077 -0.004)" fill="#fff"/>
                <path id="Path_147" data-name="Path 147" d="M50.359,303.563a7.581,7.581,0,0,1,3.663.972c.055-1.148.1-2.331.127-3.531H46.569c.03,1.2.072,2.383.127,3.531A7.58,7.58,0,0,1,50.359,303.563Z" transform="translate(-42.597 -275.331)" fill="#fff"/>
            </g>
            </svg>
        </label>
        <input type="radio" id="Marketing" name="filter-services" class="btn-check radio-hidden">
        <label class="filter-button" for="Marketing">Marketing
            <svg xmlns="http://www.w3.org/2000/svg" class="marketing" height="30" viewBox="0 0 42.248 40.789">
            <path id="megaphone" d="M34.454,31.62A43.348,43.348,0,0,0,16.4,36.344L9.378,40.4a3.878,3.878,0,0,1-5.293-1.419L.518,32.8a3.879,3.879,0,0,1,1.419-5.293l5.816-3.358a.7.7,0,0,1,.962.258l4.57,7.915a.7.7,0,0,0,.98.247.723.723,0,0,0,.225-.976l-4.6-7.972a.7.7,0,0,1,.208-.929A43.337,43.337,0,0,0,22.076,10.18a2.948,2.948,0,0,1,5.046.1L36.892,27.2A2.947,2.947,0,0,1,34.454,31.62Zm1.254-11.786A4.406,4.406,0,0,0,32.9,14.977a.7.7,0,0,0-.848,1.015L34.4,20.071A.705.705,0,0,0,35.708,19.834ZM19.453,44.75l-3.342-5.8a.7.7,0,0,0-.962-.258l-4.3,2.48a.7.7,0,0,0-.258.962l3.347,5.8a2.288,2.288,0,0,0,1.987,1.146c.762,0,1.054-.258,2.685-1.2A2.291,2.291,0,0,0,19.453,44.75Zm21.4-30.27a.7.7,0,1,0-.7-1.22l-1.822,1.052a.705.705,0,0,0,.353,1.314C38.927,15.627,38.876,15.619,40.849,14.48Zm-6.475-3.649.444-1.658a.7.7,0,1,0-1.36-.364l-.444,1.658a.7.7,0,1,0,1.36.364ZM42.224,22a.7.7,0,0,0-.5-.862l-1.658-.444a.7.7,0,0,0-.364,1.36,11.415,11.415,0,0,0,1.841.468.7.7,0,0,0,.68-.522Z" transform="translate(0 -8.287)" fill="#fff"/>
            </svg>
        </label>
        <input type="radio" id="Media" name="filter-services" class="btn-check radio-hidden">
        <label class="filter-button" for="Media">Media
            <svg id="video-player" xmlns="http://www.w3.org/2000/svg" class="marketing" height="30" viewBox="0 0 49.724 40.789">
            <circle id="Ellipse_1" data-name="Ellipse 1" cx="1.427" cy="1.427" r="1.427" transform="translate(11.418 28.546)" fill="#fff"/>
            <path id="Path_9" data-name="Path 9" d="M211,175.272v6.94l6.94-3.47Z" transform="translate(-190.508 -162.718)" fill="#fff"/>
            <path id="Path_10" data-name="Path 10" d="M45.354,46H4.37A4.375,4.375,0,0,0,0,50.37V82.419a4.375,4.375,0,0,0,4.37,4.37H45.354a4.375,4.375,0,0,0,4.37-4.37V50.37A4.375,4.375,0,0,0,45.354,46ZM17.578,56.2a1.457,1.457,0,0,1,2.108-1.3l11.654,5.827a1.457,1.457,0,0,1,0,2.606L19.686,69.154a1.457,1.457,0,0,1-2.108-1.3ZM42.343,78.049H17.31a4.344,4.344,0,0,1-8.2,0H7.381a1.457,1.457,0,1,1,0-2.913H9.106a4.344,4.344,0,0,1,8.2,0H42.343a1.457,1.457,0,1,1,0,2.913Z" transform="translate(0 -46)" fill="#fff"/>
            </svg>
        </label>
        
        <div class="selection-items mb-4 mb-md-5">
            <input type="checkbox" name="services[]" id="brand-design" value="brand-design" class="radio-hidden">
            <label for="brand-design" class="selection-button" filter="design">
                <svg id="_18-brand_champion" data-name="18-brand champion" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 94.595 119.9">
                    <g id="glyph">
                        <path id="Path_43" data-name="Path 43" d="M305.55,362.316l-1.948.938-5.671,7.111a5.7,5.7,0,0,1-4.477,2.156h-9.1L279.219,375l16.021,21.065a2.864,2.864,0,0,0,2.279,1.13q.138,0,.277-.013a2.863,2.863,0,0,0,2.293-1.587l5.018-10.207,11.176-2.11a2.864,2.864,0,0,0,1.748-4.547Z" transform="translate(-226.381 -277.291)" class="service-svg-1" />
                        <path id="Path_44" data-name="Path 44" d="M92.841,372.523a5.7,5.7,0,0,1-4.477-2.156l-5.671-7.111-1.948-.938-12.481,16.41a2.863,2.863,0,0,0,1.748,4.547l11.177,2.11,5.018,10.207A2.863,2.863,0,0,0,88.5,397.18q.139.013.277.013a2.864,2.864,0,0,0,2.279-1.13L107.076,375l-5.139-2.475Z" transform="translate(-65.319 -277.293)" class="service-svg-1" />
                        <path id="Path_45" data-name="Path 45" d="M150.142,54.44l2.169-9.5a2.864,2.864,0,0,0-.553-2.422l-6.078-7.622-2.169-9.5a2.863,2.863,0,0,0-1.549-1.943l-8.783-4.23L127.1,11.592a2.863,2.863,0,0,0-2.239-1.078h-9.749l-8.784-4.23a2.865,2.865,0,0,0-2.485,0l-8.784,4.23H85.311a2.863,2.863,0,0,0-2.238,1.078l-6.079,7.622-8.783,4.23a2.864,2.864,0,0,0-1.549,1.943l-2.169,9.505-6.078,7.622a2.863,2.863,0,0,0-.553,2.422l2.17,9.5-2.17,9.5a2.863,2.863,0,0,0,.553,2.422l6.078,7.622,2.169,9.5a2.864,2.864,0,0,0,1.549,1.943l8.783,4.23,6.079,7.622a2.864,2.864,0,0,0,2.239,1.078H95.06l8.784,4.23a2.865,2.865,0,0,0,2.485,0l8.784-4.23h9.749a2.863,2.863,0,0,0,2.239-1.078l6.079-7.622,8.783-4.23a2.864,2.864,0,0,0,1.549-1.943l2.169-9.5,6.078-7.622a2.863,2.863,0,0,0,.553-2.422ZM105.086,89.518a34.839,34.839,0,1,1,34.839-34.839A34.879,34.879,0,0,1,105.086,89.518Z" transform="translate(-57.788 -6)" class="service-svg-1" />
                        <path id="Path_46" data-name="Path 46" d="M153.975,76a31.975,31.975,0,1,0,31.975,31.975A32.011,32.011,0,0,0,153.975,76Zm0,14.4a2.863,2.863,0,1,1-2.863,2.863A2.863,2.863,0,0,1,153.975,90.4ZM133.931,103.68a2.863,2.863,0,1,1,2.863-2.863A2.863,2.863,0,0,1,133.931,103.68Zm37.855,3.212-2.725,16.348a2.864,2.864,0,0,1-2.825,2.393H141.714a2.863,2.863,0,0,1-2.825-2.393l-2.725-16.348a2.863,2.863,0,0,1,4.391-2.868l5.87,3.834,5.1-8.376a2.863,2.863,0,0,1,4.89,0l5.1,8.376,5.87-3.834a2.863,2.863,0,0,1,4.391,2.868Zm2.234-3.212a2.863,2.863,0,1,1,2.863-2.863A2.863,2.863,0,0,1,174.02,103.68Z" transform="translate(-106.678 -59.296)" class="service-svg-1" />
                    </g>
                </svg>
                Brand Design
            </label>
            <input type="checkbox" name="services[]" id="web-dev" name="web-dev" value="web-dev" class="radio-hidden">
            <label for="web-dev" class="selection-button" filter="design">
                <svg id="world-wide-web" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 94.595 94.595">
                    <g id="Group_2" data-name="Group 2" transform="translate(30.269 6.005)">
                        <g id="Group_1" data-name="Group 1">
                        <path id="Path_47" data-name="Path 47" d="M163.83,54.394h14.258V32.5C172.136,34.455,166.783,42.81,163.83,54.394Z" transform="translate(-163.83 -32.501)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_4" data-name="Group 4" transform="translate(30.269 66.697)">
                        <g id="Group_3" data-name="Group 3">
                        <path id="Path_48" data-name="Path 48" d="M163.83,361c2.953,11.585,8.306,19.939,14.258,21.893V361Z" transform="translate(-163.83 -361)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_6" data-name="Group 6" transform="translate(0 33.441)">
                        <g id="Group_5" data-name="Group 5">
                        <path id="Path_49" data-name="Path 49" d="M91.824,181H2.771A2.771,2.771,0,0,0,0,183.771v22.171a2.771,2.771,0,0,0,2.771,2.771H91.824a2.771,2.771,0,0,0,2.771-2.771V183.771A2.771,2.771,0,0,0,91.824,181Zm-3.248,9.553-5.543,11.085a2.772,2.772,0,0,1-4.958,0l-3.064-6.127-3.064,6.127a2.886,2.886,0,0,1-4.958,0l-5.31-10.623a2.69,2.69,0,0,1-.561-1.41,2.737,2.737,0,0,1-.257.948l-5.543,11.085a2.772,2.772,0,0,1-4.958,0L47.3,195.512l-3.064,6.127a2.886,2.886,0,0,1-4.958,0l-5.543-11.085a2.726,2.726,0,0,1-.247-.912,2.839,2.839,0,0,1-.66,1.556l-5.221,10.441a2.772,2.772,0,0,1-4.958,0l-3.064-6.127-3.064,6.127a2.772,2.772,0,0,1-4.958,0L6.02,190.553a2.772,2.772,0,0,1,4.958-2.479l3.064,6.127,3.064-6.127a2.793,2.793,0,0,1,4.958,0l3.064,6.127,3.064-6.127a2.877,2.877,0,0,1,2.658-1.526,2.834,2.834,0,0,1,2.631,2.681,2.742,2.742,0,0,1,1.493-2.394,2.776,2.776,0,0,1,3.719,1.24l3.064,6.127,3.064-6.127a2.886,2.886,0,0,1,4.958,0L52.84,194.2l3.064-6.127a2.776,2.776,0,0,1,3.719-1.24,2.738,2.738,0,0,1,1.49,2.368,2.664,2.664,0,0,1,2.467-2.644,3.067,3.067,0,0,1,2.826,1.516l3.064,6.127,3.064-6.127a2.886,2.886,0,0,1,4.958,0l3.064,6.127,3.064-6.127a2.772,2.772,0,0,1,4.958,2.479Z" transform="translate(0 -181)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_8" data-name="Group 8" transform="translate(50.069 66.697)">
                        <g id="Group_7" data-name="Group 7">
                        <path id="Path_50" data-name="Path 50" d="M271,361v21.893c5.952-1.954,11.3-10.309,14.258-21.893Z" transform="translate(-271 -361)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_10" data-name="Group 10" transform="translate(50.069 6.005)">
                        <g id="Group_9" data-name="Group 9">
                        <path id="Path_51" data-name="Path 51" d="M271,32.5V54.394h14.258C282.3,42.81,276.952,34.455,271,32.5Z" transform="translate(-271 -32.501)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_12" data-name="Group 12" transform="translate(4.535 66.697)">
                        <g id="Group_11" data-name="Group 11">
                        <path id="Path_52" data-name="Path 52" d="M44.585,361H24.544c7.575,16.632,24.349,27.9,42.763,27.9C57.3,388.9,48.55,377.873,44.585,361Z" transform="translate(-24.544 -361)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_14" data-name="Group 14" transform="translate(47.297 66.697)">
                        <g id="Group_13" data-name="Group 13">
                        <path id="Path_53" data-name="Path 53" d="M278.721,361c-3.965,16.873-12.71,27.9-22.722,27.9,18.414,0,35.188-11.266,42.763-27.9Z" transform="translate(-256 -361)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_16" data-name="Group 16" transform="translate(4.535)">
                        <g id="Group_15" data-name="Group 15">
                        <path id="Path_54" data-name="Path 54" d="M24.544,27.9H44.585C48.55,11.025,57.3,0,67.307,0,48.893,0,32.119,11.266,24.544,27.9Z" transform="translate(-24.544 0)" class="service-svg-1"/>
                        </g>
                    </g>
                    <g id="Group_18" data-name="Group 18" transform="translate(47.297 0)">
                        <g id="Group_17" data-name="Group 17">
                        <path id="Path_55" data-name="Path 55" d="M256,0c10.011,0,18.757,11.025,22.722,27.9h20.041C291.188,11.266,274.414,0,256,0Z" transform="translate(-256)" class="service-svg-1"/>
                        </g>
                    </g>
                </svg>                          
                Web Dev
            </label>
            <input type="checkbox" name="services[]" id="ui-design" value="ui-design" class="radio-hidden">
            <label for="ui-design" class="selection-button" filter="design">
                <svg id="computer" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 94.424 89.506">
                    <path id="Path_56" data-name="Path 56" d="M68.225,114.5a4.723,4.723,0,0,1,7.312-.074l.734.88a.787.787,0,0,0,1.208,0l3.811-4.569a4.722,4.722,0,0,1,7.251,0l2.821,3.382a.787.787,0,0,0,1.391-.5V92.074A1.574,1.574,0,0,0,91.18,90.5H67.574A1.574,1.574,0,0,0,66,92.074V114.99a.787.787,0,0,0,1.391.5Zm8.791-19.667a6.295,6.295,0,1,1-6.295,6.295A6.3,6.3,0,0,1,77.016,94.828Z" transform="translate(-53.017 -75.156)" class="service-svg-1"/>
                    <path id="Path_57" data-name="Path 57" d="M301.376,220.5h-23.8A1.576,1.576,0,0,0,276,222.074v8.065a1.576,1.576,0,0,0,1.574,1.574h23.8a1.575,1.575,0,0,0,1.574-1.574v-8.065A1.576,1.576,0,0,0,301.376,220.5Z" transform="translate(-221.706 -179.583)" class="service-svg-1"/>
                    <path id="Path_58" data-name="Path 58" d="M86.124,201.291a1.572,1.572,0,0,0-2.417,0l-5.624,6.742A1.572,1.572,0,0,1,75.641,208L73.12,204.98a1.573,1.573,0,0,0-2.417,0l-4.52,5.419a.787.787,0,0,0-.183.5v4.138a1.574,1.574,0,0,0,1.574,1.574H91.18a1.574,1.574,0,0,0,1.574-1.574v-5.518a.788.788,0,0,0-.183-.5Z" transform="translate(-53.017 -163.698)" class="service-svg-1"/>
                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="3.796" cy="3.796" r="3.796" transform="translate(18.979 22.775)" class="service-svg-1"/>
                    <path id="Path_59" data-name="Path 59" d="M88.129,12.5H6.295A6.3,6.3,0,0,0,0,18.795V73.679a1.574,1.574,0,0,0,1.574,1.574H92.85a1.574,1.574,0,0,0,1.574-1.574V18.795A6.3,6.3,0,0,0,88.129,12.5ZM42.884,63.843a4.727,4.727,0,0,1-4.721,4.721H14.557a4.727,4.727,0,0,1-4.721-4.721V29.418A4.727,4.727,0,0,1,14.557,24.7H38.163a4.727,4.727,0,0,1,4.721,4.721Zm41.507-.787a4.727,4.727,0,0,1-4.721,4.721h-23.8a4.727,4.727,0,0,1-4.721-4.721V54.991a4.727,4.727,0,0,1,4.721-4.721h23.8a4.727,4.727,0,0,1,4.721,4.721ZM82.817,42.2H63.31a3.141,3.141,0,0,1-5.443,0H52.72a1.574,1.574,0,0,1,0-3.147h5.147a3.141,3.141,0,0,1,5.443,0H82.817a1.574,1.574,0,0,1,0,3.147Zm0-11.8H77.67a3.141,3.141,0,0,1-5.443,0H52.72a1.574,1.574,0,1,1,0-3.147H72.227a3.141,3.141,0,0,1,5.443,0h5.147a1.574,1.574,0,1,1,0,3.147Z" transform="translate(0 -12.5)" class="service-svg-1"/>
                    <path id="Path_60" data-name="Path 60" d="M186.4,424.123H164.144a4.72,4.72,0,0,1-4.544-6l.979-3.476a1.573,1.573,0,0,1,1.515-1.147H188.45a1.573,1.573,0,0,1,1.515,1.147l.979,3.474A4.721,4.721,0,0,1,186.4,424.123Z" transform="translate(-128.06 -334.617)" class="service-svg-1"/>
                    <path id="Path_61" data-name="Path 61" d="M94.424,349.074v1.967a6.3,6.3,0,0,1-6.295,6.295H6.295A6.3,6.3,0,0,1,0,351.041v-1.967A1.574,1.574,0,0,1,1.574,347.5H92.85A1.574,1.574,0,0,1,94.424,349.074Z" transform="translate(0 -281.6)" class="service-svg-1"/>
                </svg>
                UI Design
            </label>
            <input type="checkbox" name="services[]" id="graphic-design" value="graphic-design" class="radio-hidden">
            <label for="graphic-design" class="selection-button" filter="design">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 94.423 94.424">
                    <g id="design" transform="translate(0)">
                    <path id="Path_62" data-name="Path 62" d="M317.571,10.251l-7.826-7.828a8.316,8.316,0,0,0-11.735,0L296.138,4.3l9.781,9.781a2.766,2.766,0,0,1-3.912,3.912l-9.78-9.781-3.912,3.913,5.87,5.868a2.766,2.766,0,1,1-3.912,3.912l-5.87-5.868-7.825,7.826,19.56,19.559,21.436-21.43a8.319,8.319,0,0,0,0-11.736Zm0,0" transform="translate(-225.571 -0.001)" class="service-svg-1"/>
                    <path id="Path_63" data-name="Path 63" d="M10.251,318.592a8.305,8.305,0,0,0,11.737,0L43.183,297.4l-19.56-19.563L15.8,285.662l5.869,5.869a2.766,2.766,0,0,1-3.912,3.912l-5.869-5.869-3.912,3.913,9.781,9.779a2.766,2.766,0,0,1-3.912,3.912L4.061,297.4l-1.635,1.632a8.31,8.31,0,0,0,0,11.738Zm0,0" transform="translate(0 -226.597)" class="service-svg-1"/>
                    <path id="Path_64" data-name="Path 64" d="M.185,3.755,10.62,29.035,28.8,10.85,3.756.183A2.765,2.765,0,0,0,.185,3.755Zm0,0" transform="translate(-0.001 0.001)" class="service-svg-1"/>
                    <path id="Path_65" data-name="Path 65" d="M189.4,134.625l7.823-7.823-50.7-50.477L138.7,84.148Zm0,0" transform="translate(-113.117 -62.248)" class="service-svg-1"/>
                    <path id="Path_66" data-name="Path 66" d="M133.589,190.434l-50.7-50.477-7.823,7.823,50.7,50.48Zm0,0" transform="translate(-61.219 -114.146)" class="service-svg-1"/>
                    <path id="Path_67" data-name="Path 67" d="M394.727,375.217l-3.974-3.975L371.192,390.8l3.977,3.977a8.322,8.322,0,0,0,11.735,0v0l7.823-7.823A8.294,8.294,0,0,0,394.727,375.217Zm0,0" transform="translate(-302.737 -302.777)" class="service-svg-1"/>
                    </g>
                </svg>
                Graphic Design
            </label>
            <input type="checkbox" name="services[]" id="packaging-design" value="packaging-design" class="radio-hidden">
            <label for="packaging-design" class="selection-button" filter="design">
                <svg id="packaging" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 73.676 104.205">
                    <path id="Path_68" data-name="Path 68" d="M143.507,60H102.2L92.026,72.211h41.3Z" transform="translate(-88.561 -47.789)" class="service-svg-1"/>
                    <path id="Path_69" data-name="Path 69" d="M118.147,240.531c-9.307.679-14.395,4.463-19.752,8.447-5.939,4.417-12.068,8.97-23.4,9.667v37.137h43.147Z" transform="translate(-75 -191.577)" class="service-svg-1"/>
                    <path id="Path_70" data-name="Path 70" d="M150,0h43.147V6.106H150Z" transform="translate(-134.736)" class="service-svg-1"/>
                    <path id="Path_71" data-name="Path 71" d="M94.752,171.973c5.939-4.417,12.068-8.97,23.4-9.667V150H75v30.421C84.307,179.742,89.395,175.958,94.752,171.973Z" transform="translate(-75 -119.471)" class="service-svg-1"/>
                    <path id="Path_72" data-name="Path 72" d="M334.026,78.927h17.493l-8.746-10.5Z" transform="translate(-281.308 -54.504)" class="service-svg-1"/>
                    <path id="Path_73" data-name="Path 73" d="M317,150h24.423v73.676H317Z" transform="translate(-267.747 -119.471)" class="service-svg-1"/>
                </svg>
                Packaging Design
            </label>
            <input type="checkbox" name="services[]" id="staff-systems" value="staff-systems" class="radio-hidden">
            <label for="staff-systems" class="selection-button" filter="design">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 67.867 104.205">
                    <g id="id-card" transform="translate(0)">
                        <g id="Group_20" data-name="Group 20">
                        <g id="Group_19" data-name="Group 19">
                            <path id="Path_74" data-name="Path 74" d="M165.292,159.4a9.926,9.926,0,1,0-9.926-9.926A9.925,9.925,0,0,0,165.292,159.4Z" transform="translate(-131.359 -101.665)" class="service-svg-1"/>
                            <path id="Path_75" data-name="Path 75" d="M124.322,12.461H108.893V2.677A2.677,2.677,0,0,0,106.216,0H95.51a2.677,2.677,0,0,0-2.677,2.677v9.784H77.4A10.475,10.475,0,0,0,66.93,22.936V93.729A10.475,10.475,0,0,0,77.4,104.2h46.917A10.475,10.475,0,0,0,134.8,93.729V22.936A10.475,10.475,0,0,0,124.322,12.461ZM97.395,3.884h6.938a1.706,1.706,0,0,1,0,3.413H97.394a1.706,1.706,0,0,1,0-3.413ZM92.057,16.016h.776v.7A2.677,2.677,0,0,0,95.51,19.39h10.706a2.677,2.677,0,0,0,2.677-2.677v-.7h.776a2.908,2.908,0,1,1,0,5.817H92.057a2.908,2.908,0,1,1,0-5.817Zm-9.19,19.291h35.992V69.384h-4.143l.536-6.97a3.388,3.388,0,0,0-3.378-3.648H89.852a3.388,3.388,0,0,0-3.378,3.648l.536,6.97H82.868V35.307Zm35.569,53.908H83.29a3.272,3.272,0,0,1,0-6.544h35.146a3.272,3.272,0,0,1,0,6.544Z" transform="translate(-66.93)" class="service-svg-1"/>
                        </g>
                        </g>
                    </g>
                </svg>
                Staff Systems
            </label>
            <input type="checkbox" name="services[]" id="SEO" value="SEO" class="radio-hidden">
            <label for="SEO" class="selection-button" filter="marketing">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 89.485 89.401">
                    <path id="search" d="M89.108,81.43,67.049,59.3a35.222,35.222,0,0,0,8.78-23.2C75.828,16.193,59.04,0,38.406,0S.984,16.193.984,36.1s16.788,36.1,37.422,36.1a37.966,37.966,0,0,0,21.44-6.532l22.227,22.3a5.01,5.01,0,0,0,6.9.13A4.6,4.6,0,0,0,89.108,81.43ZM38.406,9.416c15.252,0,27.66,11.968,27.66,26.679S53.658,62.775,38.406,62.775,10.746,50.807,10.746,36.1,23.154,9.416,38.406,9.416Z" transform="translate(-0.984)" class="service-svg-1"/>
                </svg>
                SEO
            </label>
            <input type="checkbox" name="services[]" id="copywriting" value="copywriting" class="radio-hidden">
            <label for="copywriting" class="selection-button" filter="marketing">
                <svg id="copywriting" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 94.566 80.918">
                    <path id="Path_23" data-name="Path 23" d="M8.311,40.959H35.238l10.27,9.374a2.968,2.968,0,0,0,3.019.548,2.535,2.535,0,0,0,1.71-2.336V40.959h8.311c4.583,0,8.311-3.4,8.311-7.586V8.086C66.861,3.9,63.132.5,58.549.5H8.311C3.729.5,0,3.9,0,8.086V33.373C0,37.556,3.729,40.959,8.311,40.959ZM50.238,15.672a5.322,5.322,0,0,1,5.541,5.057,5.564,5.564,0,0,1-11.082,0A5.322,5.322,0,0,1,50.238,15.672Zm-16.623,0a5.322,5.322,0,0,1,5.541,5.057,5.322,5.322,0,0,1-5.541,5.057,5.322,5.322,0,0,1-5.541-5.057A5.322,5.322,0,0,1,33.615,15.672Zm-16.808,0a5.322,5.322,0,0,1,5.541,5.057,5.322,5.322,0,0,1-5.541,5.057,5.322,5.322,0,0,1-5.541-5.057A5.322,5.322,0,0,1,16.808,15.672Zm0,0" transform="translate(0 -0.5)" class="service-svg-1"/>
                    <path id="Path_24" data-name="Path 24" d="M2.771,423.132H41.531a6.61,6.61,0,0,0,1.642-.4l7.868-3.591a2.85,2.85,0,0,0,.72-.455L43.893,411.5a2.586,2.586,0,0,0-.5.657l-3.242,5.917H2.771a2.539,2.539,0,1,0,0,5.057Zm0,0" transform="translate(0 -342.214)" class="service-svg-1"/>
                    <path id="Path_25" data-name="Path 25" d="M287.236,237.8,258.95,263.54l7.813,7.131L295.1,244.979Zm0,0" transform="translate(-211.122 -197.794)" class="service-svg-1"/>
                    <path id="Path_26" data-name="Path 26" d="M443.206,181.259a2.929,2.929,0,0,0-3.934,0L433.4,186.62l7.813,7.13,5.874-5.36a2.355,2.355,0,0,0,0-3.591Zm0,0" transform="translate(-353.35 -150.156)" class="service-svg-1"/>
                </svg>
                Copywriting
            </label>
            <input type="checkbox" name="services[]" id="digital-marketing" value="digital-marketing" class="radio-hidden">
            <label for="digital-marketing" class="selection-button" filter="marketing">
                <svg id="social-media_2_" data-name="social-media (2)" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 88.656 80.918">
                    <path id="Path_29" data-name="Path 29" d="M367.139,357.177a3.142,3.142,0,1,0-3.429-3.129,3.293,3.293,0,0,0,3.429,3.129Z" transform="translate(-300.732 -295.459)" class="service-svg-1"/>
                    <path id="Path_30" data-name="Path 30" d="M344.359,420.51h0c-4.519,0-8.2,3.357-8.2,7.483v5.554a24.338,24.338,0,0,0,16.4,0v-5.554C352.556,423.867,348.878,420.51,344.359,420.51Z" transform="translate(-277.952 -354.051)" class="service-svg-1"/>
                    <path id="Path_31" data-name="Path 31" d="M66.405,40.3a23.5,23.5,0,0,0-13.8,4.388l-13-11.662c.037-.042.075-.083.112-.126a19.37,19.37,0,0,0,4.628-10.222H61.663C62.879,28.4,68.41,32.742,75.033,32.742c7.511,0,13.622-5.577,13.622-12.433S82.545,7.875,75.033,7.875c-6.623,0-12.154,4.337-13.371,10.062H44.349C43.058,7.852,33.64,0,22.25,0,9.981,0,0,9.11,0,20.309A19.752,19.752,0,0,0,8.857,36.54v-2.9a12.073,12.073,0,0,1,6.592-10.526,7.406,7.406,0,0,1-1.822-4.828c0-4.34,3.868-7.869,8.623-7.869s8.621,3.529,8.621,7.869a7.4,7.4,0,0,1-1.82,4.828,12.439,12.439,0,0,1,6.215,7.645c.461,1.735.376,2.737.376,5.781L48.912,48.074a19.314,19.314,0,0,0-4.6,10.166H26.993c-1.216-5.726-6.748-10.063-13.371-10.063C6.111,48.176,0,53.754,0,60.61S6.111,73.043,13.622,73.043c6.623,0,12.154-4.337,13.371-10.062H44.306a19.98,19.98,0,0,0,8.708,13.862v-2.9A12.072,12.072,0,0,1,59.6,63.417a7.4,7.4,0,0,1-1.82-4.828c0-4.338,3.867-7.869,8.621-7.869s8.623,3.531,8.623,7.869a7.406,7.406,0,0,1-1.822,4.828A12.073,12.073,0,0,1,79.8,73.942v2.9A19.752,19.752,0,0,0,88.656,60.61c0-11.2-9.981-20.309-22.25-20.309Z" transform="translate(0 0)" class="service-svg-1"/>
                    <path id="Path_32" data-name="Path 32" d="M115.555,99.048a3.442,3.442,0,1,0-3.427,3.128A3.291,3.291,0,0,0,115.555,99.048Z" transform="translate(-89.878 -80.76)" class="service-svg-1"/>
                    <path id="Path_33" data-name="Path 33" d="M81.15,172.985v5.554a24.335,24.335,0,0,0,16.4,0v-5.554c0-4.126-3.676-7.485-8.2-7.485S81.15,168.858,81.15,172.985Z" transform="translate(-67.098 -139.344)" class="service-svg-1"/>
                </svg>
                Digital Marketing
            </label>
            <input type="checkbox" name="services[]" id="content-marketing" value="content-marketing" class="radio-hidden">
            <label for="content-marketing" class="selection-button" filter="marketing">
                <svg id="social-media_3_" data-name="social-media (3)" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 88.656 80.918">
                    <g id="content" transform="translate(0)">
                        <path id="Path_34" data-name="Path 34" d="M6.464,32.787h27.7a6.209,6.209,0,0,0,6.464-5.9V13.4a6.209,6.209,0,0,0-6.464-5.9H6.464A6.209,6.209,0,0,0,0,13.4V26.887A6.209,6.209,0,0,0,6.464,32.787Z" transform="translate(0 17.787)" class="service-svg-1"/>
                        <path id="Path_35" data-name="Path 35" d="M6.464,41.787h27.7a6.209,6.209,0,0,0,6.464-5.9V22.4a6.209,6.209,0,0,0-6.464-5.9H6.464A6.209,6.209,0,0,0,0,22.4V35.887A6.209,6.209,0,0,0,6.464,41.787Z" transform="translate(0 39.131)" class="service-svg-1"/>
                        <path id="Path_36" data-name="Path 36" d="M82.191,0H6.464A6.209,6.209,0,0,0,0,5.9v8.429a6.209,6.209,0,0,0,6.464,5.9H82.191a6.209,6.209,0,0,0,6.464-5.9V5.9A6.209,6.209,0,0,0,82.191,0Z" transform="translate(0)" class="service-svg-1"/>
                        <path id="Path_37" data-name="Path 37" d="M50.863,7.5H15.77A2.659,2.659,0,0,0,13,10.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,7.5Z" transform="translate(35.022 17.787)" class="service-svg-1"/>
                        <path id="Path_38" data-name="Path 38" d="M50.863,10.5H15.77A2.659,2.659,0,0,0,13,13.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,10.5Z" transform="translate(35.022 24.902)" class="service-svg-1"/>
                        <path id="Path_39" data-name="Path 39" d="M50.863,13.5H15.77A2.659,2.659,0,0,0,13,16.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,13.5Z" transform="translate(35.022 32.017)" class="service-svg-1"/>
                        <path id="Path_40" data-name="Path 40" d="M50.863,16.5H15.77A2.659,2.659,0,0,0,13,19.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,16.5Z" transform="translate(35.022 39.131)" class="service-svg-1"/>
                        <path id="Path_41" data-name="Path 41" d="M50.863,19.5H15.77A2.659,2.659,0,0,0,13,22.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,19.5Z" transform="translate(35.022 46.246)" class="service-svg-1"/>
                        <path id="Path_42" data-name="Path 42" d="M50.863,22.5H15.77A2.659,2.659,0,0,0,13,25.029a2.659,2.659,0,0,0,2.77,2.529H50.863a2.659,2.659,0,0,0,2.77-2.529A2.659,2.659,0,0,0,50.863,22.5Z" transform="translate(35.022 53.361)" class="service-svg-1"/>
                    </g>
                </svg>
                Content Marketing
            </label>
        <input type="checkbox" name="services[]" id="affiliate-marketing" value="affiliate-marketing" class="radio-hidden">
        <label for="affiliate-marketing" class="selection-button" filter="marketing">
            <svg id="network" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 97.524 90.595">
            <path id="Path_76" data-name="Path 76" d="M91.76,202.449H92.1a4.173,4.173,0,0,1,4.259,4.08v3.044a4.173,4.173,0,0,1-4.26,4.081h-.337a4.173,4.173,0,0,1-4.259-4.081V206.53a4.173,4.173,0,0,1,4.26-4.081Z" transform="translate(-73.85 -167.842)" class="service-svg-1"/>
            <path id="Path_77" data-name="Path 77" d="M377.24,150.727V145.75A5,5,0,0,0,373,140.9a6.956,6.956,0,0,1-9.916-.028,5.034,5.034,0,0,0-4.428,4.876v4.977a18.724,18.724,0,0,0,18.584,0Z" transform="translate(-288.503 -118.559)" class="service-svg-1"/>
            <path id="Path_78" data-name="Path 78" d="M78.5,281.057a6.956,6.956,0,0,1-9.916-.028A5.034,5.034,0,0,0,64.16,285.9v4.977a18.723,18.723,0,0,0,18.584,0V285.9A5,5,0,0,0,78.5,281.057Z" transform="translate(-55.373 -230.735)" class="service-svg-1"/>
            <path id="Path_79" data-name="Path 79" d="M334.57,29.089a18.056,18.056,0,0,0-16.948,11.287,16.839,16.839,0,0,0,5.155,19.147V56.28a7.521,7.521,0,0,1,7.448-7.318,1.277,1.277,0,0,1,1.037.485,4.367,4.367,0,0,0,6.708.157,1.417,1.417,0,0,1,1.236-.63,7.465,7.465,0,0,1,7.157,7.305v3.242a16.839,16.839,0,0,0,5.155-19.147A18.057,18.057,0,0,0,334.57,29.089ZM341.5,42.841a6.63,6.63,0,0,1-6.76,6.476H334.4a6.63,6.63,0,0,1-6.76-6.476V39.8a6.631,6.631,0,0,1,6.759-6.477h.337A6.631,6.631,0,0,1,341.5,39.8Z" transform="translate(-255.125 -29.089)" class="service-svg-1"/>
            <path id="Path_80" data-name="Path 80" d="M40.072,169.248a18.056,18.056,0,0,0-16.948,11.286,16.838,16.838,0,0,0,5.156,19.147v-3.243a7.521,7.521,0,0,1,7.447-7.317,1.271,1.271,0,0,1,1.037.486,4.367,4.367,0,0,0,6.707.157,1.426,1.426,0,0,1,1.235-.63,7.465,7.465,0,0,1,7.159,7.3v3.244a16.838,16.838,0,0,0,5.155-19.147,18.056,18.056,0,0,0-16.948-11.286ZM47,183a6.63,6.63,0,0,1-6.76,6.477H39.9A6.631,6.631,0,0,1,33.143,183v-3.043a6.631,6.631,0,0,1,6.76-6.476h.337A6.63,6.63,0,0,1,47,179.957Z" transform="translate(-21.993 -141.268)" class="service-svg-1"/>
            <path id="Path_81" data-name="Path 81" d="M334.57,309.406a18.057,18.057,0,0,0-16.948,11.287,16.839,16.839,0,0,0,5.155,19.147V336.6a7.521,7.521,0,0,1,7.448-7.317,1.277,1.277,0,0,1,1.037.486,4.367,4.367,0,0,0,6.708.157,1.414,1.414,0,0,1,1.236-.63,7.465,7.465,0,0,1,7.158,7.3v3.243a16.839,16.839,0,0,0,5.155-19.147,18.057,18.057,0,0,0-16.948-11.287Zm6.929,13.752a6.63,6.63,0,0,1-6.76,6.476H334.4a6.63,6.63,0,0,1-6.76-6.476v-3.043a6.631,6.631,0,0,1,6.76-6.477h.337a6.631,6.631,0,0,1,6.759,6.477Z" transform="translate(-255.125 -253.447)" class="service-svg-1"/>
            <path id="Path_82" data-name="Path 82" d="M226.5,159.823V143.217c-10.087-.6-18.232-8.121-19.23-17.756l-25.716,12.755a19.054,19.054,0,0,1,.834,25.68l24.876,13.758C208.228,167.987,216.385,160.426,226.5,159.823Z" transform="translate(-148.307 -106.223)" class="service-svg-1"/>
            <path id="Path_83" data-name="Path 83" d="M386.259,62.29h.337a4.173,4.173,0,0,1,4.26,4.081v3.043a4.173,4.173,0,0,1-4.26,4.081h-.337A4.173,4.173,0,0,1,382,69.414V66.371A4.173,4.173,0,0,1,386.259,62.29Z" transform="translate(-306.983 -55.662)" class="service-svg-1"/>
            <path id="Path_84" data-name="Path 84" d="M373,421.216a6.956,6.956,0,0,1-9.916-.027,5.034,5.034,0,0,0-4.428,4.876v4.977a18.724,18.724,0,0,0,18.584,0v-4.977A5,5,0,0,0,373,421.216Z" transform="translate(-288.503 -342.914)" class="service-svg-1"/>
            <path id="Path_85" data-name="Path 85" d="M386.259,342.607h.337a4.173,4.173,0,0,1,4.26,4.082v3.042a4.173,4.173,0,0,1-4.26,4.081h-.337a4.173,4.173,0,0,1-4.259-4.08v-3.044a4.173,4.173,0,0,1,4.259-4.081Z" transform="translate(-306.983 -280.02)" class="service-svg-1"/>
            </svg>
            Affiliate Marketing
        </label>
        <input type="checkbox" name="services[]" id="email-marketing" value="email-marketing" class="radio-hidden">
        <label for="email-marketing" class="selection-button" filter="marketing">
            <svg id="email" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 95.784 64.141">
            <g id="Group_22" data-name="Group 22" transform="translate(63.493 11.825)">
                <g id="Group_21" data-name="Group 21">
                <path id="Path_86" data-name="Path 86" d="M339.392,165.619,371.683,185.5V144.9Z" transform="translate(-339.392 -144.896)" class="service-svg-1"/>
                </g>
            </g>
            <g id="Group_24" data-name="Group 24" transform="translate(0 11.825)">
                <g id="Group_23" data-name="Group 23">
                <path id="Path_87" data-name="Path 87" d="M0,144.9V185.5l32.291-19.884Z" transform="translate(0 -144.896)" class="service-svg-1"/>
                </g>
            </g>
            <g id="Group_26" data-name="Group 26" transform="translate(0.18)">
                <g id="Group_25" data-name="Group 25">
                <path id="Path_88" data-name="Path 88" d="M90.578,80H6.767A5.862,5.862,0,0,0,.96,84.962l47.712,30.619L96.385,84.962A5.862,5.862,0,0,0,90.578,80Z" transform="translate(-0.96 -80)" class="service-svg-1"/>
                </g>
            </g>
            <g id="Group_28" data-name="Group 28" transform="translate(0.192 36.065)">
                <g id="Group_27" data-name="Group 27">
                <path id="Path_89" data-name="Path 89" d="M58.842,277.926l-8.471,5.435a3.074,3.074,0,0,1-3.293,0l-8.471-5.44L1.024,301.075A5.854,5.854,0,0,0,6.819,306H90.63a5.854,5.854,0,0,0,5.795-4.921Z" transform="translate(-1.024 -277.92)" class="service-svg-1"/>
                </g>
            </g>
            </svg>
            Email Marketing
        </label>
        <input type="checkbox" name="services[]" id="video-content" value="video-content" class="radio-hidden">
        <label for="video-content" class="selection-button" filter="social-content">
            <svg id="video-camera" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 95.784 51.364">
            <g id="Group_31" data-name="Group 31">
                <g id="Group_30" data-name="Group 30">
                <path id="Path_92" data-name="Path 92" d="M54.18,96.512H10.48c-5.764,0-10.48,4.3-10.48,9.565v32.234c0,5.261,4.716,9.565,10.48,9.565h43.7c5.764,0,10.48-4.3,10.48-9.565V106.077C64.659,100.721,59.944,96.512,54.18,96.512Z" transform="translate(0 -96.512)" class="service-svg-1"/>
                </g>
            </g>
            <g id="Group_33" data-name="Group 33" transform="translate(69.899 5.107)">
                <g id="Group_32" data-name="Group 32" transform="translate(0 0)">
                <path id="Path_93" data-name="Path 93" d="M359.634,124a5.631,5.631,0,0,0-1.782.67L341.5,133.279V155.47l16.453,8.609a6.562,6.562,0,0,0,8.593-2.1,5.456,5.456,0,0,0,.838-2.87V129.549C367.389,126.01,363.721,123.141,359.634,124Z" transform="translate(-341.504 -123.847)" class="service-svg-1"/>
                </g>
            </g>
            </svg>
            Video Content
        </label>
        <input type="checkbox" name="services[]" id="audio-content" value="audio-content" class="radio-hidden">
        <label for="audio-content" class="selection-button" filter="social-content">
            <svg id="speaker-filled-audio-tool" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 95.784 69.451">
                <path id="Path_97" data-name="Path 97" d="M47.921,71.542a3.959,3.959,0,0,1-2.5,3.592,4.67,4.67,0,0,1-1.85.378,4.607,4.607,0,0,1-2.776-.914L17.015,56.612H4.35A4.171,4.171,0,0,1,0,52.643V36.826a4.174,4.174,0,0,1,4.35-3.971H17.016L40.8,14.869a4.675,4.675,0,0,1,4.626-.535,3.961,3.961,0,0,1,2.5,3.592V71.542Zm16.716-6.2c-.106.007-.208.01-.313.01a4.565,4.565,0,0,1-3.075-1.162l-.582-.533a3.714,3.714,0,0,1-.42-5.172,21.515,21.515,0,0,0-.669-28.29,3.717,3.717,0,0,1,.3-5.309l.581-.531a4.636,4.636,0,0,1,6.445.3,29.637,29.637,0,0,1,.907,39.109A4.476,4.476,0,0,1,64.637,65.338ZM82.621,77.607a4.519,4.519,0,0,1-3.142,1.4c-.06,0-.12,0-.182,0a4.566,4.566,0,0,1-3.076-1.162l-.571-.522a3.721,3.721,0,0,1-.253-5.363,40.226,40.226,0,0,0,10.88-27.233A40.22,40.22,0,0,0,74.628,16.69a3.723,3.723,0,0,1,.175-5.434l.57-.522A4.454,4.454,0,0,1,78.58,9.567,4.532,4.532,0,0,1,81.705,10.9,48.451,48.451,0,0,1,95.784,44.736,48.426,48.426,0,0,1,82.621,77.607Z" transform="translate(0 -9.565)" class="service-svg-1"/>
            </svg>
            Audio Content
        </label>
        <input type="checkbox" name="services[]" id="social-media" value="social-media-content" class="radio-hidden">
        <label for="social-media" class="selection-button" filter="social-content">
            <svg id="social-media_4_" data-name="social-media (4)" xmlns="http://www.w3.org/2000/svg" width="80" height="100" viewBox="0 0 85.481 78.02">
                <g id="Group_35" data-name="Group 35">
                    <g id="Group_34" data-name="Group 34">
                    <path id="Path_94" data-name="Path 94" d="M238.093,90a3.832,3.832,0,0,0-3.99,3.641v9.479a4.006,4.006,0,0,0,7.979,0V93.641A3.832,3.832,0,0,0,238.093,90Z" transform="translate(-195.019 -76.285)" class="service-svg-1"/>
                    <path id="Path_95" data-name="Path 95" d="M79.637,0H5.843A5.612,5.612,0,0,0,0,5.333V38.858a5.612,5.612,0,0,0,5.843,5.333H9.815L22.438,55.712c1.578,1.44,4.275.42,4.275-1.616v-9.9H79.637a5.612,5.612,0,0,0,5.843-5.333V5.333A5.612,5.612,0,0,0,79.637,0ZM29.321,35c-3.24.037-5.61.053-7.354.053-4.487,0-4.823-.1-5.152-.2a2.5,2.5,0,0,1-1.7-1.569,2.605,2.605,0,0,1,.566-2.431c.23-.305.563-.7,1.067-1.306,1.165-1.392,3.332-3.982,6.965-8.719a11.3,11.3,0,0,0,2.022-3.646l.073-.521a3.244,3.244,0,0,0-3.359-2.943,3.3,3.3,0,0,0-3.3,2.471,2.505,2.505,0,0,1-2.94,1.8A2.3,2.3,0,0,1,14.238,15.3a8.229,8.229,0,0,1,8.213-6.161c4.615,0,8.37,3.427,8.37,7.64a2.1,2.1,0,0,1-.02.29l-.113.809a2.094,2.094,0,0,1-.045.226,15.258,15.258,0,0,1-2.825,5.337c-2.471,3.223-4.278,5.471-5.559,7.031,2.069,0,4.608-.02,7-.048A2.3,2.3,0,1,1,29.321,35Zm22.752-8.165c0,4.529-4.037,8.213-9,8.213s-9-3.684-9-8.213V17.356c0-4.529,4.037-8.213,9-8.213s9,3.684,9,8.213Zm18.473,7.553A2.677,2.677,0,0,1,67,34.369L61.321,29.12V32.7a2.515,2.515,0,0,1-5.009,0V11.429a2.515,2.515,0,0,1,5.009,0v8.848l5.01-3.738a2.671,2.671,0,0,1,3.524.323,2.152,2.152,0,0,1-.354,3.216l-6.045,4.509,7.111,6.568a2.147,2.147,0,0,1-.021,3.233Z" class="service-svg-1"/>
                    </g>
                </g>
                <path id="Path_96" data-name="Path 96" d="M205.88,324.779l-.593.541-.593-.541a11.028,11.028,0,0,0-14.574,0,8.846,8.846,0,0,0,0,13.3l13.4,12.227a2.677,2.677,0,0,0,3.542,0l13.4-12.227a8.846,8.846,0,0,0,0-13.3A11.027,11.027,0,0,0,205.88,324.779Z" transform="translate(-155.868 -272.957)" class="service-svg-1"/>
            </svg>
            Social Media Content
        </label>
            
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <p style="font-size: 20px; font-weight: 700;"> Select the services that suit your business and click continue. If you've accidentally selected a service that you don't want, you can remove it from your basket by clicking in the top right corner. </p>
        </div>
        <div class="col-12 col-md-6 d-flex center-content flex-column">
            {{-- <button class="d-block long-button mb-3">View Basket</button>
            <button class="long-button" style="background-color: var(--color-navyblue); color: var(--color-white);">Continue</button>    --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 d-block"></div>
    <div class="col-12 col-xl-4">
        <p style="font-size: 20px; font-weight: 700;"> Now that you've selected some of our services, fill in this form so we can continue your journey with us. </p>
        <p style="font-size: 20px; font-weight: 300;"> Once you've submitted the form we'll look to arrange a meeting with you to further discuss your needs. </p>
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
</div>
</div>
@endsection
