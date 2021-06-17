<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" defer></script>
    <script src="{{asset('js/all.min.js')}}" defer></script>
</head>

<body>
    @include('layouts.navigation')

    {{-- Dashboard --}}
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-primary" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Dashboard</div>
            <div class="list-group list-group-flush">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <p>
                            <button class="btn text-white d-flex justify-content-between w-100"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              <span>
                                <i class="fa fa-home" aria-hidden="true"></i> Inicio
                              </span>
                              <i class="fa fa-sort-down" aria-hidden="true"></i>
                            </button>
                          </p>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body mx-3 text-dark">
                              <a href="">Item</a>
                            </div>
                          </div>
                        </p>
                    </li>
                    <li class="mb-1">
                        <p>
                            <button class="btn text-white d-flex justify-content-between w-100"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                              <span>
                                <i class="fa fa-sticky-note" aria-hidden="true"></i></i> Bitácocras
                              </span>
                              <i class="fa fa-sort-down" aria-hidden="true"></i>
                            </button>
                          </p>
                          <div class="collapse" id="collapseExample2">
                            <div class="card card-body mx-3 text-dark">
                              <a href="">Item</a>
                            </div>
                          </div>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <!-- Page Heading -->
                <header>
                    <div>
                        {{ $header }}
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
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
