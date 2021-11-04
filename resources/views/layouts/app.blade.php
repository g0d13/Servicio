<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Primary Meta Tags -->
    <title>{{ config('app.name', 'CONFETEX') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Juan Diego Parra mendez">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Volt CSS -->
    <link type="text/css" href="/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet">
    <!-- Scripts -->
    <script src=/js/sweetalert2@11.js></script>
    <script src="/js/all.min.js"></script>
    <title>
        CONFETEX
    </title>

    @livewireScripts
</head>

<body class="g-sidenav-show  bg-gray-100">
<x-sidebar />

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <style>
        .outline-none {
            box-shadow: none;
        }
        .btn-primary {
            background-color: var(--bs-blue);
        }
        .btn-primary:hover {
            background-color: var(--bs-blue);
        }
        .navbar-link > .actives > .icon  {
            background-color: var(--bs-secondary) !important;
        }
        .actives {
            font-weight: 600;
            box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
            background: white;
        }
        .actives > div:nth-child(1) {
            background-color: var(--bs-blue) !important;
        }
        body {
            font-family: system-ui !important;
        }
        * {
            font-family: system-ui !important;
        }
    </style>
    <!-- Navbar -->
    <x-topnav />
    <!-- End Navbar -->
    <div style="padding: 2em">
        {{$slot}}
    </div>
</main>
<script src="/js/core/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/js/plugins/chartjs.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.6'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/soft-ui-dashboard.js?v=1.0.3"></script>
</body>

</html>
