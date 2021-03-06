<x-slot name="header">
    Reparaciones
</x-slot>
<div class="card p-3 rounded-3 overlay-scrollbar p-4" style="background-color: white!important">
    <div class="d-flex align-content-between align-items-center justify-content-between">
        <p class="text-muted mb-3 fs-4 fw-bold">Reparaciones</p>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless align-middle">
            <thead class="border-top border-bottom">
            <th class="text-muted ">#</th>
            <th class="text-muted ">Tipo reparación</th>
            <th class="text-muted ">Quedó lista</th>
            <th class="text-muted ">Mecánico</th>
            <th class="text-muted ">Bitácora</th>
            </thead>
            <tbody>
            @foreach ($reparaciones as $reparacion)
                <tr>
                    <td>{{ $reparacion->id }}</td>
                    <td>{{ $reparacion->tipo_reparacion }}</td>
                    <td>{{ $reparacion->quedo_lista }}</td>
                    <td>{{ $reparacion->mecanico->nombre }} {{ $reparacion->mecanico->apellidos }}</td>
                    <td>{{ $reparacion->bitacora()->withTrashed()->first()->nombre }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
