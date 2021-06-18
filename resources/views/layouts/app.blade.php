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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">--}}

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
            <!-- Top navigation-->
            <nav class="navbar navbar-light shadow-md mt-3 mx-3 px-0 rounded-3" style="background: white!important;">
                <div class="d-flex justify-content-between w-100 px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <button class="btn rounded-0" id="sidebarToggle">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>

                        <button class="btn d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        {{ $header }}
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center me-3 flex-column d-none d-md-block">
                            <span class="m-0 p-0 fw-bold">Margot Robbie</span>
                        </div>
                        <div class="btn-group dropstart d-flex">
                            <div class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://graziamagazine.com/mx/wp-content/uploads/sites/13/2019/01/MARGOT-ROBBIE.jpg?fit=1500%2C1000"
                                    alt="" class="rounded-pill" style="width: 40px; height: 40px;">
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="m-3 mt-4">
                <!-- Page Content -->
                <main class="overlay-scrollbar">
                    {{ $slot }}
                </main>

            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/all.min.js') }}" defer></script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
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
