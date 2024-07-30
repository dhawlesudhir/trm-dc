@extends('layouts.layout')

@section('navigationType', 'data-navigation-type=combo')
@section('navbarShape', 'data-navbar-horizontal-shape=slim')

@section('styles')
    {{-- unused as per coverage tool --}}
    {{-- <link href="{{Vite::asset('vendors/choices/choices.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{Vite::asset('vendors/dhtmlx-gantt/dhtmlxgantt.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{Vite::asset('vendors/flatpickr/flatpickr.min.css')}}" rel="stylesheet"> --}}

    <link href="{{Vite::asset('vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
    {{-- unused as per coverage tool --}}
    {{-- <link href="{{Vite::asset('resources/assets/css/theme-rtl.min.css')}}" type="text/')}}" rel="stylesheet" id="style-rtl"> --}}
    {{-- <link href="{{Vite::asset('resources/assets/css/theme.min.css')}}" type="text/')}}" rel="stylesheet" id="style-default"> --}}
    {{-- <link href="{{Vite::asset('resources/assets/css/user-rtl.min.css')}}" type="text/')}}" rel="stylesheet" id="user-style-rtl"> --}}
    {{-- <link href="{{Vite::asset('resources/assets/css/user.min.css')}}" type="text/')}}" rel="stylesheet" id="user-style-default"> --}}

@endsection

@section('navbar')
    @include('navbars.horizontal-slim')
@endsection

@section('scripts')
    <script>
        window.config.set({
            phoenixNavbarTopStyle: 'darker'
        });
    </script>
    <script>
        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
        navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVertical && navbarVerticalStyle === 'darker') {
        navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
  </script>
@endsection
