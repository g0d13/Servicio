<x-app-layout>
    <x-slot name="header">
        Usuarios
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Usuarios</p>
            <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
        </div>
        <table class="table table-borderless align-middle">

            <thead class="border-top border-bottom">
            <th class="text-uppercase text-muted ">#</th>
            <th class="text-uppercase text-muted ">Nombre</th>
            <th class="text-uppercase text-muted ">Apellidos</th>
            <th class="text-uppercase text-muted ">Correo</th>
            <th class="text-uppercase text-muted ">rol</th>
            <th class="text-uppercase text-muted "></th>
            </thead>
            <tbody>
            <td>
                1
            </td>
            <td>
                Juan Diego
            </td>
            <td>
                Parra Mendez
            </td>
            <td>
                admin@admin.com
            </td>
            <td>
                Administrador
            </td>
            <td>
                Editar|Eliminar
            </td>
            </tbody>
        </table>
    </div>
</x-app-layout>
