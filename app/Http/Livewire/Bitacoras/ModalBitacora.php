<?php

namespace App\Http\Livewire\Bitacoras;

use App\Models\Bitacora;
use App\Models\Planta;
use App\Models\User;
use Livewire\Component;

class ModalBitacora extends Component
{
    protected $listeners = ['resetearErrores', 'mostrarModalActualizarBitacora'];
    public $bitacora;
    public $nombre;
    public $detalles;
    public $mecanico;
    public $planta;

    public function crearBitacora() {
        $this->validate( [
            'nombre' => 'required|min:3',
            'detalles' => 'required',
            'mecanico' => 'required|numeric',
        ], null,  [
            'nombre' => $this->nombre,
            'detalles' => $this->detalles,
            'mecanico' => $this->mecanico,
        ]);
        $planta = User::find($this->mecanico)->planta_id;
        Bitacora::create([
            'nombre' => $this->nombre,
            'detalles' => $this->detalles,
            'mecanico_id' => $this->mecanico,
            'planta_id' => $planta
        ]);

        return redirect()->route('bitacoras.index');
    }


    public function actualizarBitacora() {
        $this->validate( [
            'nombre' => 'required|min:3',
            'detalles' => 'required',
            'mecanico' => 'required|numeric',
        ], null,  [
            'nombre' => $this->nombre,
            'detalles' => $this->detalles,
            'mecanico' => $this->mecanico,
        ]);
        $planta = User::find($this->mecanico)->planta_id;
        $this->bitacora->update([
            'nombre' => $this->nombre,
            'detalles' => $this->detalles,
            'mecanico_id' => $this->mecanico,
            'planta_id' => $planta
        ]);

        return redirect()->route('bitacoras.index');
    }

    public function mostrarModalActualizarBitacora($id) {
        $this->bitacora = Bitacora::find($id);
        $this->nombre = $this->bitacora->nombre;
        $this->detalles = $this->bitacora->detalles;
        $this->mecanico = $this->bitacora->mecanico_id;
        $this->planta = $this->bitacora->planta_id;
        $this->emit('mostrarModalCrearBitacora');
    }

    public function resetearErrores() {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->resetearVariables();

        $this->emit('ocultarModalBitacora');
    }

    private function resetearVariables() {
        $this->nombre = null;
        $this->detalles = null;
        $this->mecanico = null;
    }

    public function render()
    {
        $mecanicos = User::where('rol_id', 3)->get();
        $plantas = Planta::all();
        return view('livewire.bitacoras.modal-bitacora', [
            'mecanicos' => $mecanicos,
            'plantas' => $plantas
        ]);
    }
}
