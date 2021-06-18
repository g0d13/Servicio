<x-app-layout>
    <x-slot name="header">
        Solicitudes
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Solicitudes</p>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#agregarSolicitud">Agregar</button>
        </div>
        <table class="table table-borderless align-middle">
            <thead class="border-top border-bottom">
                <th class="text-uppercase text-muted ">#</th>
                <th class="text-uppercase text-muted ">Prioridad</th>
                <th class="text-uppercase text-muted ">Problema</th>
                <th class="text-uppercase text-muted ">Modulo</th>
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
                    Modulo
                </td>
                <td>
                    Juan Diego
                </td>
{{-- No mostrar a los supervisores ni a mecanicos--}}
                <td>
                    Maquina 33
                </td>
                <td>
                    Numero maquina
                </td>
                {{-- No mostrar a los supervisores ni a mecanicos--}}
                <td>
                    Bitacora 1
                </td>
                <td>
                    {{-- Mostrar solo a los supervisores --}}
                    <button class="btn">
                        <i class="far fa-clock"></i>
                    </button>
                    {{-- Mostrar solo a los mecanicos --}}
                    <button class="btn">
                        <i class="fas fa-check"></i>
                    </button>
                </td>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <!-- Modal -->
        <div class="modal fade" id="agregarSolicitud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="prioridad" class="form-label">Prioridad</label>
                            <select id="prioridad" class="form-select form-select" aria-label=".form-select-sm example">
                                <option selected>Seleccionar</option>
                                <option value="1">Baja</option>
                                <option value="2">Media</option>
                                <option value="2">Alta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="problema" class="form-label">Codigo del problema</label>
                            <select id="problema" class="form-select form-select" aria-label=".form-select-sm example">
                                <option selected>Seleccionar</option>
                                <option value="1">Problema1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="correo" class="form-control" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="planta" class="form-label">Planta</label>
                            <input type="planta" class="form-control" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <select id="rol" class="form-select form-select" aria-label=".form-select-sm example">
                                <option selected>Seleccionar</option>
                                <option value="1">Mecanico</option>
                                <option value="2">Supervisor</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
