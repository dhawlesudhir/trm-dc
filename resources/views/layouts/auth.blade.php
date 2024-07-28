<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title','default title')</title>
    @include('componets.boostrap-head')
    @stack('head-content')
</head>
<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @yield('content')
        @include('componets.chat')
    </main>

    @section('scripts')
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{Vite::asset('vendors/popper/popper.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/anchorjs/anchor.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/is/is.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/lodash/lodash.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/list.js/list.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/feather-icons/feather.min.js')}}"></script>
        <script src="{{Vite::asset('vendors/dayjs/dayjs.min.js')}}"></script>
    @show

    @yield('body-scripts')
</body>
</html>
