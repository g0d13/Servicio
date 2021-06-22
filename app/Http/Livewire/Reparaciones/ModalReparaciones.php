<?php

namespace App\Http\Livewire\Reparaciones;

use Livewire\Component;

class ModalReparaciones extends Component
{
    public $reparado;
    public $horaReparacion;
    public $mecanico;
    public $bitacora;
    public $solicitud;

    protected $listeners = [];

    public function render()
    {
        return view('livewire.reparaciones.modal-reparaciones');
    }
}
