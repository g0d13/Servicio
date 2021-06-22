<div class="sidebar-heading mb-3">
    <p class="fw-bold text-center text-white fs-3">Dashboard</p>
</div>
<div class="list-group list-group-flush">
    <ul class="list-unstyled ps-0 ms-3 ms-md-0">
        <li class="mb-3">
            <a href="{{route('dashboard')}}" class="text-decoration-none w-100 ms-3 sidebar-item {{ active(route('dashboard'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-home me-3" aria-hidden="true"></i> Inicio</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('bitacoras.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('bitacoras.index'), Request::url()) }}" style="font-size: 16px;">
                <i class="fa fa-book me-3" aria-hidden="true">
                </i> Bitácoras</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('usuarios.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('usuarios.index'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-user me-3" aria-hidden="true"></i> Usuarios</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('solicitudes.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('solicitudes.index'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-paperclip me-3" aria-hidden="true"></i></i> Solicitudes</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('reparaciones.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('reparaciones.index'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-hammer me-3" aria-hidden="true"></i></i> Reparaciones</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('maquinas.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('maquinas.index'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-tools me-3" aria-hidden="true"></i></i> Maquinas</a>
        </li>

        <li class="mb-3 sidebar-item">
            <a href="{{route('plantas.index')}}" class="text-decoration-none w-100 ms-3 {{ active(route('plantas.index'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-building me-3" aria-hidden="true"></i> Plantas</a>
        </li>
        <li class="mb-3 sidebar-item">
            <a href="{{route('configuracion')}}" class="text-decoration-none w-100 ms-3 {{ active(route('configuracion'), Request::url()) }}" style="font-size: 16px;"><i class="fa fa-cog me-3" aria-hidden="true"></i> Configuración</a>
        </li>
    </ul>
</div>
