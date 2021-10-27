<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0">Mantenimiento correctivo</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <div class="media-body ml-2 text-dark align-items-center d-none d-xl-block">
                                <span class="mb-0 font-small font-weight-bold">{{ auth()->user()->nombre }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-5" style="margin-left: -5rem!important;margin-top: 9rem!important;">
                        <a class="dropdown-item font-weight-bold" href="{{route('configuracion')}}"><span
                                class="fas fa-cog"></span>Ajustes</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="{{route('logout')}}"><span
                                class="fas fa-sign-out-alt text-danger"></span>Salir</a>
                    </div>
                </li>
            </ul>
        </div>
        <button id="iconNavbarSidenav" class="d-block d-xl-none btn btn-outline-primary btn-sm">
            <span class="fas fa-bars text-primary" />
        </button>
    </div>
</nav>
