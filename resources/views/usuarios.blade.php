<x-app-layout>
    <x-slot name="header">
        Usuarios
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Usuarios</p>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#agregarBitacora">Agregar</button>
        </div>
        <table class="table table-borderless align-middle">
            <thead class="border-top border-bottom">
                <th class="text-uppercase text-muted ">#</th>
                <th class="text-uppercase text-muted ">Nombre</th>
                <th class="text-uppercase text-muted ">Apellidos</th>
                <th class="text-uppercase text-muted ">Correo</th>
                <th class="text-uppercase text-muted ">rol</th>
                <th class="text-uppercase text-muted ">planta</th>
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
                    Planta 1
                </td>
                <td>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#agregarBitacora"><i class="fas fa-edit"></i></button>
                    |
                    <button class="btn"><i class="fas fa-trash"></i></button>
                </td>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <!-- Modal -->
        <div class="modal fade" id="agregarBitacora" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar o editar usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="apellidos" class="form-control" id="nombre">
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
