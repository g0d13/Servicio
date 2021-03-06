<div wire:ignore.self class="modal fade" role="dialog" id="modalBitacora" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar o editar bitacora</h5>
                <button type="button" class="close btn outline-none" data-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" wire:model="nombre">
                    @error('nombre')
                        <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Línea de producción</label>
                    <select wire:model="planta" id="correo" class="form-control" wire:model="plantaSeleccionada">
                        <option value="">--Seleccione una línea de producción--</option>
                        @foreach ($plantas as $planta)
                            <option value="{{ $planta->id }}">Planta {{ $planta->id }}</option>
                        @endforeach
                    </select>
                    @error('planta')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mecanico" class="form-label">Mecánico encargado</label>
                    <select name="mecanico" id="mecanico" class="form-select form-select" wire:model="mecanico">
                        <option>--Selecciona un mecánico--</option>
                        @foreach ($mecanicos as $mecanico)
                            <option value="{{ $mecanico->id }}">{{ $mecanico->nombre }} {{ $mecanico->apellidos }}
                            </option>
                        @endforeach
                    </select>
                    @error('mecanico')
                        <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                @if ($bitacora)
                    <button type="button" class="btn btn-primary" wire:click.prevent="actualizarBitacora">Actualizar</button>
                @else
                    <button type="button" class="btn btn-primary" wire:click.prevent="crearBitacora">Crear</button>
                @endif
            </div>
        </form>
    </div>
</div>

<script>
    var myModal;
    Livewire.on('mostrarModalCrearBitacora', () => {
        myModal = new bootstrap.Modal(document.getElementById('modalBitacora'), {});

        myModal.show();
    });

    document.getElementById('modalBitacora').addEventListener('hidden.bs.modal', function(event) {
        Livewire.emit('resetearErrores');
    });

    Livewire.on('ocultarModalBitacora', () => {
        myModal.hide();
    });
</script>
