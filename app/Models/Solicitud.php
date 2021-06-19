<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = ['prioridad', 'modulo'];

    public function maquina()
    {
        return $this->hasOne(Maquina::class, 'id', 'maquina_id');
    }

    public function bitacora()
    {
        return $this->hasOne(Bitacora::class, 'id', 'bitacora_id');
    }

    public function supervisor()
    {
        return $this->hasOne(User::class, 'id', 'supervisor_id');
    }

    public function problema()
    {
        return $this->hasOne(Problema::class, 'id', 'problema_id');
    }
}
