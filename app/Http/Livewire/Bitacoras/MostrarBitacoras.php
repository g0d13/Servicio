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
        $usuario = \Auth::user();
        $bitacoras = Bitacora::when($usuario->rol_id !== 1, function ($query) use($usuario){
            $query->where('planta_id', $usuario->planta_id);
        })->get();
        return view('livewire.bitacoras.mostrar-bitacoras', [
            'bitacoras' => $bitacoras
        ]);
    }
}
