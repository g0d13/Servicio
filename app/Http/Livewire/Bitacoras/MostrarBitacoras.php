<?php

namespace App\Http\Livewire\Bitacoras;

use App\Models\Bitacora;
use Livewire\Component;

class MostrarBitacoras extends Component
{
    protected $listeners = ['eliminarBitacora'];

    public function eliminarBitacora($id) {
        $bitacora = Bitacora::find($id);
        $bitacora->delete();

        return redirect()->route('bitacoras.index');
    }

    public function render()
    {
        $bitacoras = Bitacora::with('mecanico')->get();
        return view('livewire.bitacoras.mostrar-bitacoras', [
            'bitacoras' => $bitacoras
        ]);
    }
}
