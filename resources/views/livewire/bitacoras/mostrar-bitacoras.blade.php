<x-slot name="header">
    Bitacoras
</x-slot>
<div class="card p-3 rounded-3 overlay-scrollbar" style="background-color: white!important">
    <div class="d-flex align-content-between align-items-center justify-content-between">
        <p class="text-muted mb-3 fs-4 fw-bold">Bitacoras</p>
        @if(Auth::user()->rol->id == 1)
            <button class="btn btn-sm btn-primary" wire:click="$emit('mostrarModalCrearBitacora')">Agregar</button>
        @endif
    </div>
    <div class="table-responsive">
        <table class=" table table-borderless align-middle">
            <thead class="border-top border-bottom">
            <th class="text-uppercase text-muted ">#</th>
            <th class="text-uppercase text-muted ">Nombre</th>
            <th class="text-uppercase text-muted ">Planta</th>
            <th class="text-uppercase text-muted ">Mecanico encargado</th>
            @if(auth()->user()->rol_id == 1)
                <th class="text-uppercase text-muted ">Status</th>
            @endif
            <th class="text-uppercase text-muted "></th>
            </thead>
            <tbody>
            @foreach ($bitacoras as $bitacora)
                <tr>
                    <td>{{ $bitacora->id }}</td>
                    <td>{{ $bitacora->nombre }}</td>
                    <td>Planta {{ $bitacora->planta_id }}</td>
                    <td>{{ $bitacora->mecanico->nombre ?? '' }} {{ $bitacora->mecanico->apellidos ?? '' }}</td>
                    @if(auth()->user()->rol_id == 1)
                        <td><span class="badge bg-success">ok</span></td>
                    @endif
                    <td>
                        @if(Auth::user()->rol->id == 1)
                            <button class="btn" wire:click="$emit('mostrarModalActualizarBitacora', {{ $bitacora->id }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn"
                                    wire:click.prevent="$emit('alertaEliminarBitacora', {{ $bitacora->id }})">
                                <i class="fas fa-trash"></i>
                            </button>
                        @endif
                        <button class="btn" wire:click.prevent="$emit('mostrarModalSolicitud', {{ $bitacora->id }})">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<livewire:bitacoras.modal-bitacora/>
<livewire:solicitudes.modal-solicitudes/>
