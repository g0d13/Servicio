<div class="row mt-4">
    <!-- Modal -->
    <div class="modal fade" id="{{ $idModal }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ $idUsuario == 0 ? 'Crear nuevo usuario' : 'Actualizar usuario' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('usuarios.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre ?? '' }}"
                                required>
                            <div class="invalid-feedback">
                                El nombre es requerido
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" value="{{ $usuario->apellidos ?? '' }}" name="apellidos" required>
                            <div class="invalid-feedback">
                                Los apellidos son requerido
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" value="{{ $usuario->email ?? '' }}" required name="email">
                            <div class="invalid-feedback">
                                El correo es requerido
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" value="{{ $usuario->email ?? '' }}" required name="password" minlength="8">
                            <div class="invalid-feedback">
                                La contraseña es requerida y debe ser de al menos 8 caracteres
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Planta</label>
                            <select id="rol" class="form-select form-select" aria-label=".form-select-sm example" name="planta_id">
                                <option value="" selected>--Selecciona la planta--</option>
                                @foreach ($plantas as $planta)
                                    <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                La planta es obligatoria
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <select id="rol" class="form-select form-select" aria-label=".form-select-sm example" name="rol_id">
                                <option value="" selected>--Selecciona el rol--</option>
                                @foreach ($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                El rol es requerido
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
