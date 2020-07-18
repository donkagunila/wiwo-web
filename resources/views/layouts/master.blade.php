<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Wiwo') }} </title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/main.css') }}" id="colors">

</head>
<body>

    <div id="wrapper">

        @include('layouts.shared.header')

            @yield('content')

    </div>




<!-- Scripts
================================================== -->
{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('scripts/jquery-2.2.0.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>


</body>
</html>
