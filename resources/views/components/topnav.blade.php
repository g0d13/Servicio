<!-- Top navigation-->
<nav class="navbar navbar-light shadow-md mt-3 mx-3 px-0 rounded-3" style="background: white!important;">
    <div class="d-flex justify-content-between w-100 px-3 align-items-center">
        <div class="d-flex align-items-center">
            <button class="btn rounded-0" id="sidebarToggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <button class="btn d-block d-md-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <span class="fw-bold">{{$slot}}</span>
        </div>
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-center me-3 flex-column d-none d-md-block">
                <p class="m-0 p-0 fw-bold">{{ auth()->user()->nombre }}</p>
                <p class="text-muted mx-5 m-0 p-0">
                    @switch(auth()->user()->rol_id)
                        @case(1)
                            <small>Administrador</small>
                            @break
                        @case(2)
                            <small>Supervisor</small>
                            @break
                        @case(3)
                            <small>Mecánico</small>
                            @break

                        @default

                    @endswitch
                </p>
            </div>
            <div class="btn-group dropstart d-flex">
                <div class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                     aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <div style="height: 40px;width: 40px; background-color: darkslategray;text-align: center;color: white;font-weight: bold;text-transform: uppercase;border-radius: 50%;padding: 10px">
                            <span>{{substr(auth()->user()->nombre ?? '', 0, 1)}}</span>

                        </div>
                    </div>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('configuracion')}}">Configuracion</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Salir</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
