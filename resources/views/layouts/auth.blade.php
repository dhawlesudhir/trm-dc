<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title','Welcome to TheRechargeMart')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link rel="icon" href="{{ Vite::asset('resources/img/favicons/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link href="{{asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <script src="{{ Vite::asset('resources/assets/js/config.js')}}"></script>

    @yield('styles')

    @vite([
        'resources/assets/css/theme.css',
        'resources/assets/css/user.css',
        // 'resources/assets/js/bootstrap-config.js',
    ])
</head>
<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @yield('content')
        @include('componets.chat')
    </main>

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
        @yield('scripts')
        @stack('scripts')
</body>
</html>
