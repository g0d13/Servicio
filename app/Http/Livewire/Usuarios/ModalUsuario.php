<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Planta;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ModalUsuario extends Component
{
    public $usuario;
    public $registrar = true;
    public $titulo = 'Crear nuevo usuario';
    protected $listeners = ['mostrarModalActualizarUsuario', 'resetearErrores'];
    // atributos del usuario
    public $nombre;
    public $apellidos;
    public $correo;
    public $contrasenia;
    public $rol;
    public $planta;

    public function crearUsuario() {
        $this->validate([
            'nombre' => 'required|min:3',
            'apellidos' => 'required|min:3',
            'correo' => 'required',
            'contrasenia' => 'required|min:6',
            'rol' => 'required|numeric',
            'planta' => 'required|numeric',
        ], null, [
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'correo' => $this->correo,
            'contrasenia' => $this->contrasenia ,
            'rol' => $this->rol,
            'planta' => $this->planta,
        ]);
        User::create([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'email' => $this->correo,
            'password' => $this->contrasenia,
            'rol_id' => $this->rol,
            'planta_id' => $this->planta,
        ]);

        $this->resetErrorBag();
        $this->resetValidation();
        return redirect()->route('usuarios.index');
    }

    public function actualizarUsuario() {
        $this->validate([
            'nombre' => 'required|min:3',
            'apellidos' => 'required|min:3',
            'correo' => 'required',
            'contrasenia' => 'nullable|min:6',
            'rol' => 'required|numeric',
            'planta' => 'required|numeric',
        ], null, [
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'correo' => $this->correo,
            'contrasenia' => $this->contrasenia ,
            'rol' => $this->rol,
            'planta' => $this->planta,
        ]);

        $this->usuario->update([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'email' => $this->correo,
            'password' => $this->contrasenia ?? $this->usuario->password,
            'rol_id' => $this->rol,
            'planta_id' => $this->planta,
        ]);

        $this->resetErrorBag();
        $this->resetValidation();
        return redirect()->route('usuarios.index');
    }

    public function mostrarModalActualizarUsuario($id) {
        $this->usuario = User::find($id);
        $this->titulo = 'Actualizar usuario';
        $this->nombre = $this->usuario->nombre;
        $this->apellidos = $this->usuario->apellidos;
        $this->correo = $this->usuario->email;
        $this->rol = $this->usuario->rol_id;
        $this->planta = $this->usuario->planta_id;
        $this->emit('mostrarModalCrearUsuario');
    }

    public function resetearErrores() {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->resetearVariables();
        $this->emit('ocultarModalUsuario');
    }

    public function resetearVariables() {
        $this->usuario = null;
        $this->titulo = null;
        $this->nombre = null;
        $this->apellidos = null;
        $this->correo = null;
        $this->rol = null;
        $this->planta = null;
    }

    public function render()
    {
        $roles = Rol::all();
        $plantas = Planta::all();
        return view('livewire.usuarios.modal-usuario', [
            'roles' => $roles,
            'plantas' => $plantas
        ]);
    }


}
