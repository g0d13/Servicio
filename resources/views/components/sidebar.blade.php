<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <p class="navbar-brand m-0" href="#">
            <span class="ms-1 font-weight-bold" id="iconSidenav">CONFETEX</span>
        </p>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main" style="overflow: hidden; height: 87vh">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link {{ active(route('dashboard'), Request::url()) }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    </div>
                    <span class="text-dark">Inicio</span>
                </a>
            </li>

            @if (auth()->user()->rol_id == 1 || auth()->user()->rol_id == 2)
                <li class="nav-item">
                    <a href="{{route('bitacoras.index')}}" class="nav-link {{ active(route('bitacoras.index'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon "><span class="fas fa-book "></span></span>
                        </div>
                        <span class="text-dark">Bitácoras</span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->rol_id == 1)
                <li class="nav-item">
                    <a href="{{route('usuarios.index')}}" class="nav-link {{ active(route('usuarios.index'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon"><span class="fas fa-user"></span></span>
                        </div>
                        <span class="text-dark">Usuarios</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{route('solicitudes.index')}}" class="nav-link {{ active(route('solicitudes.index'), Request::url()) }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="sidebar-icon"><span class="fas fa-paperclip"></span></span>
                    </div>
                    <span class="text-dark">Solicitudes</span>
                </a>
            </li>
            @if (auth()->user()->rol_id == 1)
                <li class="nav-item">
                    <a href="{{route('reparaciones.index')}}" class="nav-link {{ active(route('reparaciones.index'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon"><span class="fas fa-hammer"></span></span>
                        </div>
                        <span class="text-dark">Reparaciones</span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->rol_id == 1)
                <li class="nav-item">
                    <a href="{{route('maquinas.index')}}" class="nav-link {{ active(route('maquinas.index'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon"><span class="fas fa-tools"></span></span>
                        </div>
                        <span class="text-dark">Máquinas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('plantas.index')}}" class="nav-link {{ active(route('plantas.index'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon"><span class="fas fa-building"></span></span>
                        </div>
                        <span class="text-dark">Lineas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('configuracion')}}" class="nav-link {{ active(route('configuracion'), Request::url()) }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                        </div>
                        <span class="text-dark">Configuración</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="fas fa-sign-out-alt"></span>
                    </div>
                    <span class="text-dark">Salir</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

