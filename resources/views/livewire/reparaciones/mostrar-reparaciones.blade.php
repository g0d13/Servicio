<x-slot name="header">
    Reparaciones
</x-slot>
<div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
    <div class="d-flex align-content-between align-items-center justify-content-between">
        <p class="text-muted mb-3 fs-4 fw-bold">Reparaciones</p>
    </div>
    <table class="table table-borderless align-middle">
        <thead class="border-top border-bottom">
            <th class="text-uppercase text-muted ">#</th>
            <th class="text-uppercase text-muted ">Reparado</th>
            <th class="text-uppercase text-muted ">Hora reparacion</th>
            <th class="text-uppercase text-muted ">Mecanico</th>
            <th class="text-uppercase text-muted ">Bitacora</th>
        </thead>
        <tbody>
            @foreach ($reparaciones as $reparacion)
                <tr>
                    <td>{{ $reparacion->id }}</td>
                    <td></td>
                    <td>{{ \Carbon\Carbon::parse($reparacion->created_at)->day }} de {{ \Carbon\Carbon::parse($reparacion->created_at)->monthName }} de {{ \Carbon\Carbon::parse($reparacion->created_at)->year }} a las {{ \Carbon\Carbon::parse($reparacion->created_at)->hour }}:{{ \Carbon\Carbon::parse($reparacion->created_at)->minute }}</td>
                    <td>{{ $reparacion->mecanico->nombre }} {{ $reparacion->mecanico->apellidos }}</td>
                    <td>{{ $reparacion->bitacora->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
