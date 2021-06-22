<?php

namespace App\Http\Livewire\Solicitudes;

use App\Models\Reparacion;
use App\Models\Solicitud;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MostrarSolicitudes extends Component
{
    protected $listeners = ['horaLLegadaMecanico', 'crearReparacion'];

    public function horaLLegadaMecanico($solicitud) {
        Solicitud::find($solicitud)->update([
            'llegada_mecanico' => Carbon::now()
        ]);

        return redirect()->route('solicitudes.index');
    }

    public function crearReparacion($idSolicitud) {
        $solicitud = Solicitud::find($idSolicitud);
        Reparacion::create([
            'bitacora_id' => $solicitud->bitacora_id,
            'solicitud_id' => $solicitud->id,
            'mecanico_id' => Auth::user()->id
        ]);

        return redirect()->route('solicitudes.index');
    }

    public function render()
    {
        $solicitudes = Solicitud::with('supervisor')->with('maquina')->with('bitacora')->with('problema')->with('reparacion')->get();
        return view('livewire.solicitudes.mostrar-solicitudes', [
            'solicitudes' => $solicitudes
        ]);
    }
}
