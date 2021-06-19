<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        .bg-white,.card,.modal-content{
            background-color: white!important;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif !important;
            background: rgb(245, 245, 245)!important;
        }

    </style>

</head>

<body>
    @include('layouts.navigation')

    {{-- Dashboard --}}
    <div class="d-flex" id="wrapper">

        <!-- Sidebar-->
        <div class="border-end bg-dark" id="sidebar-wrapper">
            <x-sidebar></x-sidebar>
        </div>
        {{-- Sidebar en mobile --}}
        <div class="offcanvas offcanvas-start d-flex flex-column align-content-end" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header bg-dark">
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
            <div class="offcanvas-body p-0 m-0 py-3 bg-dark">
                <div class="border-end bg-dark">
                    <x-sidebar></x-sidebar>
                </div>
            </div>
        </div>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <x-topnav >
                {{$header}}
            </x-topnav>
            <!-- Page content-->
            <div class="m-3 mt-4">
                <!-- Page Content -->
                <main class="overlay-scrollbar">
                    {{ $slot }}
                </main>

            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                        'sb-sidenav-toggled'));
                });
            }
        });

    </script>
</body>

</html>
