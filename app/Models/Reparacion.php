<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    protected $fillable = ['tipo_reparacion', 'quedo_lista'];

    public function bitacora()
    {
        return $this->hasOne(Bitacora::class, 'id', 'bitacora_id');
    }

    public function mecanico()
    {
        return $this->hasOne(User::class, 'id', 'mecanico_id');
    }
}
