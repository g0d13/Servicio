<?php

namespace App\Http\Livewire\Maquinas;

use App\Models\Maquina;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarMaquinas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $maquinas = Maquina::paginate();
        return view('livewire.maquinas.mostrar-maquinas', [
            'maquinas' => $maquinas
        ]);
    }
}
