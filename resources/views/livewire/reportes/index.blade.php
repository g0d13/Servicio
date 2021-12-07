<div>
    <x-slot name="header">
        Lineas de producción
    </x-slot>
    <div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
        <div class="d-flex align-content-between align-items-center justify-content-between">
            <p class="text-muted mb-3 fs-4 fw-bold">Lineas de producción</p>
            <button wire:click="$emit('mostrarModalCrearPlanta')" class="btn btn-sm btn-primary">Agregar</button>
        </div>
        <div class="table-responsive">
            <table class="table table-borderless align-middle">
                <thead class="border-top border-bottom">
                <th class="text-uppercase">#</th>
                <th class="text-uppercase text-muted ">Prioridad</th>
                <th class="text-uppercase text-muted ">Operación</th>
                <th class="text-uppercase text-muted ">No. Máquina</th>
                <th class="text-uppercase text-muted ">Modulo</th>
                <th class="text-uppercase text-muted ">Código de problema</th>
                <th class="text-uppercase text-muted ">Llamó al mecánico</th>
                <th class="text-uppercase text-muted ">Llegó el mecánico</th>
                <th class="text-uppercase text-muted ">Quedó lista</th>
                <th class="text-uppercase text-muted ">Tipo de reparacián</th>
                <th class="text-uppercase text-muted ">Nombre del mecánico</th>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>Sin mécanico encargado</td>
                        <td>12 de sep de 2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

