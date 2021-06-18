<x-app-layout>
    <x-slot name="header">
        Solicitudes
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Solicitudes</p>
            <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
        </div>
        <table class="table table-borderless align-middle">
            <thead class="border-top border-bottom">
                <th class="text-uppercase text-muted ">#</th>
                <th class="text-uppercase text-muted ">Prioridad</th>
                <th class="text-uppercase text-muted ">Problema</th>
                <th class="text-uppercase text-muted ">Supervisor</th>
                <th class="text-uppercase text-muted ">Status</th>
                <th class="text-uppercase text-muted ">Maquina</th>
                <th class="text-uppercase text-muted ">Bitacora</th>
                <th class="text-uppercase text-muted "></th>
            </thead>
                <tbody>
                <td>
                    1
                </td>
                <td>
                    Alta
                </td>
                <td>
                    Mecanico
                </td>
                <td>
                    Juan Diego
                </td>
                <td>
                    Maquina 33
                </td>
                <td>
                    En progreso
                </td>
                <td>
                    Bitacora 1
                </td>
                <td>
                    Accion1
                </td>
            </tbody>
        </table>
    </div>
</x-app-layout>
