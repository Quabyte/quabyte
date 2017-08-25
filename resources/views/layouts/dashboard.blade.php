<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('custom.meta')

        <title>@yield('title', 'Dashboard') | Scrabit</title>

        @include('dashboard.partials.css.base')

        @include('dashboard.partials.css.plugins')

        <!-- Custom Styles -->
        @yield('custom.css')

        <!-- Icon Styles -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/makhina/makhina.css') }}">
        @yield('custom.fonts')

        <!-- Header Scripts -->
        <script src="{{ asset('assets/js/dashboard/breakpoints.min.js') }}"></script>
        <script>
            Breakpoints();
        </script>
        @yield('header.scripts')
    </head>
    <body class="@yield('body.class')">

        <div id="app">
            @include('dashboard.partials.navbar')

            @include('dashboard.partials.sidebar')

            <div class="page">
                <!-- Page Header -->
                <div class="page-header">
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <!-- End Page Header -->

                <!-- Page Content -->
                <div class="page-content">

                    @yield('content')

                </div>
                <!-- End Page Content -->
            </div>

            @include('dashboard.partials.footer')
        </div>

            @include('dashboard.partials.js.core')

            @include('dashboard.partials.js.template')

            @include('dashboard.partials.js.template-config')

            @include('dashboard.partials.js.initialize')

            <script src="{{ asset('assets/js/app.js') }}"></script>
            @yield('footer.scripts')
    </body>
</html>